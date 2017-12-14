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
        $projects = Project::get();
        return view('backend.projects.index' , compact('projects'));
    }

    
    public function create() {
        $projectCategories = ProjectCategory::pluck('id', 'category');
        return view('backend.projects.create', compact('projectCategories'));
    }

    
    public function store(Request $request) {
        $this->validate($request, [
            'project_category_id'=>'required',
            'name'=>'required',
            'short_description'=>'required',
            'long_description'=>'required',
            
            
        
        ]);
        
        return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return view('backend.projects.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        return view('backend.projects.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        return redirect()->route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        Project::where('id', $id)->delete();

        return back();
    }

}
