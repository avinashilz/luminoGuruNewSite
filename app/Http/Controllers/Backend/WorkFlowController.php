<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WorkFlow;
use App\Models\FileEntry;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Services\FileUploadService;

class WorkFlowController extends Controller
{
   
     public function index() {
        return view('backend.work-flows.index')->with('workFlows', WorkFlow::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('backend.work-flows.create');
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
            'description' => 'required',
        ]);

        $workFlow = new WorkFlow();
        $workFlow->title = $request->title;
        $workFlow->description = $request->description;

        if ($request->hasFile('file')) {
            $fileUploadService = new FileUploadService();
            $workFlow->file_entry_id = $fileUploadService->uploadFile($request->file('file'));
        }
        
        $workFlow->save();

        return redirect()->route('admin.work-flows.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return view('backend.work-flows.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $workFlow = WorkFlow::where('id', $id)->with('image')->first();
        return view('backend.work-flows.create', compact('workFlow'));
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
            'description' => 'required',
        ]);

        $workFlow = WorkFlow::with('image')->find($id);
        $workFlow->title = $request->title;
        $workFlow->description = $request->description;

        if ($request->hasFile('file')) {
            $fileUploadService = new FileUploadService();
            $workFlow->file_entry_id = $fileUploadService->replaceFile($request->file('file'), $workFlow->image->filename);
        }

        $workFlow->save();

        return redirect()->route('admin.work-flows.edit', $workFlow->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        WorkFlow::where('id', $id)->delete();

        return back();
    }
}
