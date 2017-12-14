<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;  

class ProjectController extends Controller {

    public function index() {
        $projects = Project::get();
        return view('backend.projects.index' , compact('$projects'));
    }

    
    public function create() {
        $projectCategories = ProjectCategory::get();
        return view('backend.projects.create', compact('$projectCategories'));
    }

    
    public function store(Request $request) {
        $this->validate($request, [
            
        
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
        return view('backend.project.show');
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
