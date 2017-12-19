<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobPosting;

class JobPostingController extends Controller
{
   
     public function index() {
        return view('backend.job-postings.index')->with('jobPostings', JobPosting::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('backend.job-postings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'department' => 'required',
            'position' => 'required',
            'description' => 'required',
            'salary_min' => 'required',
            'experience' => 'required'
        ]);

        $jobPosting = new JobPosting();
        $jobPosting->title = $request->title;
        $jobPosting->department = $request->department;
        $jobPosting->position = $request->position;
        $jobPosting->description = $request->description;
        $jobPosting->salary_min = $request->salary_min;
        $jobPosting->salary_max = $request->salary_max;
        $jobPosting->experience = $request->experience;
        $jobPosting->keywords = $request->keywords;
        
        $jobPosting->save();

        return redirect()->route('admin.job-postings.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return view('backend.job-postings.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $jobPosting = JobPosting::where('id', $id)->first();
        return view('backend.job-postings.create', compact('jobPosting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
       $this->validate($request, [
            'title' => 'required',
            'department' => 'required',
            'position' => 'required',
            'description' => 'required',
            'salary_min' => 'required',
            'experience' => 'required'
        ]);

        $jobPosting = JobPosting::find($id);
        $jobPosting->title = $request->title;
        $jobPosting->department = $request->department;
        $jobPosting->position = $request->position;
        $jobPosting->description = $request->description;
        $jobPosting->salary_min = $request->salary_min;
        $jobPosting->salary_max = $request->salary_max;
        $jobPosting->experience = $request->experience;
        $jobPosting->keywords = $request->keywords;

        $jobPosting->save();

        return redirect()->route('admin.job-postings.edit', $jobPosting->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        JobPosting::where('id', $id)->delete();

        return back();
    }
}
