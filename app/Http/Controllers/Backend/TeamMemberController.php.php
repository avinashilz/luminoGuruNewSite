<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use App\Models\TeamImage;
use App\Models\FileEntry;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TeamMemberController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $teamMembers = TeamMember::all();
        return view('backend.team-members.index', compact('teamMembers'));
    }

    public function create() {
        return view('backend.team-members.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'email' => 'required',
        ]);
        $teamMember = new TeamMember;
        $teamMember->name = $request->name;
        $teamMember->designation = $request->designation;
        $teamMember->department = $request->department;
        $teamMember->email = $request->email;
        $teamMember->fbid = $request->fbid;
        $teamMember->linkinid = $request->linkinid;
        $teamMember->twitterid = $request->twitterid;

        $teamMember->save();
        $teamMemberId = $teamMember->id;

        foreach ($request->images as $photo) {
            if ($photo['file']->isFile()) {
                $file = $photo['file'];
                $extension = $file->getClientOriginalExtension();
                Storage::disk('local')->put($file->getFileName() . '.' . $extension, File::get($file));
                $entry = new Fileentry();
                $entry->mime = $file->getClientMimeType();
                $entry->original_filename = $file->getClientOriginalName();
                $entry->filename = $file->getFilename() . '.' . $extension;

                $entry->save();

                $entryid = $entry->id;
            }
            $memberImage = new TeamImage;
            $memberImage->team_id = $teamMemberId;
            $memberImage->file_entry_id = $entryid;
            $memberImage->save();
        }

        return redirect()->route('admin.team-members.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $teamMember = TeamMember::where('id', $id)->first();
        return view('backend.team-members.show', compact('teamMember'));
    }

    public function edit($id) {
        $teamMembers = TeamMember::where('id', $id)->first();
        return view('backend.team-members.create', compact('teamMembers'));
    }

    public function update(Request $request, $id) {
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'email' => 'required',
        ]);
        $update = TeamMember::find($id);

        $update = new TeamMember;
        $update->name = $request->name;
        $update->designation = $request->designation;
        $update->department = $request->department;
        $update->email = $request->email;
        $update->fbid = $request->fbid;
        $update->linkinid = $request->linkinid;
        $update->twitterid = $request->twitterid;

//        $update->save();


        return redirect()->route('admin.team-members.index');
    }

    public function destroy($id) {

        TeamMember::where('id', $id)->delete();

        return redirect()->route('admin.team-members.index');
    }

}
