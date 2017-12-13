<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;  

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team = Team::all();
        return view('backend.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'email' => 'required',
        ]);
        
        $team = new Team;
        $team->name = $request->name;
        $team->designation = $request->designation;
        $team->department = $request->department;
        $team->email = $request->email;
        $team->fbid = $request->fbid;
        $team->linkinid = $request->linkinid;
        $team->twitterid = $request->twitterid;
        
//        $team->save();
        $teamId = $team->id;
        
        
        return view('backend.team.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teammember = Team::where('id', $id)->first();
        return view('backend.team.create', compact('teammember'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teammember = Team::where('id', $id)->first();
        return view('backend.team.edit', compact('teammember'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'name' => 'required',
            'designation' => 'required',
            'department' => 'required',
            'email' => 'required',
        ]);
         $update = Team::find($id);
         
         $update = new Team;
        $update->name = $request->name;
        $update->designation = $request->designation;
        $update->department = $request->department;
        $update->email = $request->email;
        $update->fbid = $request->fbid;
        $update->linkinid = $request->linkinid;
        $update->twitterid = $request->twitterid;
        
//        $update->save();
         
         
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Team::where('id', $id)->delete();

        return back();
    }
}
