<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectCategory;
use App\Models\FileEntry;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller {

    public function index() {
        $projects = Project::with('image')->get();
        return view('backend.projects.index', compact('projects'));
    }

    public function create() {
        $projectCategories = ProjectCategory::pluck('category', 'id');
        return view('backend.projects.create', compact('projectCategories'));
    }

    public function store(Request $request) {

        $this->validate($request, [
            'project_category_id' => 'required',
            'name' => 'required',
            'short_description' => 'required',
            'long_description' => 'required'
        ]);

//        dd($request->toArray());
        $project = new Project;
        $project->name = $request->name;
        $project->project_category_id = $request->project_category_id;
        $project->short_description = $request->short_description;
        $project->long_description = $request->long_description;

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            Storage::disk('local')->put($file->getFileName() . '.' . $extension, File::get($file));
            $entry = new Fileentry();
            $entry->mime = $file->getClientMimeType();
            $entry->original_filename = $file->getClientOriginalName();
            $entry->filename = $file->getFilename() . '.' . $extension;
            $entry->save();
            $entryid = $entry->id;
//            dd($entryid);
        }
        $project->file_entry_id = $entryid;
        $project->save();

        return redirect()->route('admin.projects.index');
    }

    public function show($id) {
        $project = Project::where('id', $id)->with('image')->first();
        return view('backend.projects.show', compact('project'));
    }

    public function edit($id) {
        $projectCategories = ProjectCategory::pluck('category', 'id');
        $project = Project::where('id', $id)->with('image')->first();
        return view('backend.projects.create', compact('project', 'projectCategories'));
    }

    public function update(Request $request, $id) {

//        dd($request->toArray());
        $this->validate($request, [
            'project_category_id' => 'required',
            'name' => 'required',
            'short_description' => 'required',
            'long_description' => 'required'
        ]);

        $updateProject = Project::with('image')->find($id);

        $updateProject->name = $request->name;
        $updateProject->project_category_id = $request->project_category_id;
        $updateProject->short_description = $request->short_description;
        $updateProject->long_description = $request->long_description;

        foreach ($request->images as $updatePhoto) {

            if ($updatePhoto['file']->isFile()) {
                $file = $request->file('file');
                $extension = $file->getClientOriginalExtension();
                Storage::disk('local')->put($file->getFileName() . '.' . $extension, File::get($file));
                $updateEntry = FileEntry::find($updatePhoto['id']);
                Storage::disk('local')->delete($updateEntry['filename']);
                $updateEntry->mime = $file->getClientMimeType();
                $updateEntry->original_filename = $file->getClientOriginalName();
                $updateEntry->filename = $file->getFilename() . '.' . $extension;
                $updateEntry->save();
            }
        }
        $updateProject->save();
        return redirect()->route('admin.projects.index');
    }

    public function destroy($id) {
        Project::where('id', $id)->delete();

        return back();
    }

}
