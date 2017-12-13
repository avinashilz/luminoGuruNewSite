<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;  

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamMember = TeamMember::all();
        return view('backend.team-members.index', compact('teamMember'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.team-members.create');
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
        
        $teamMember = new TeamMember;
        $teamMember->name = $request->name;
        $teamMember->designation = $request->designation;
        $teamMember->department = $request->department;
        $teamMember->email = $request->email;
        $teamMember->fbid = $request->fbid;
        $teamMember->linkinid = $request->linkinid;
        $teamMember->twitterid = $request->twitterid;
        
//        $team->save();
        $teamMemberId = $teamMember->id;
        
        
        return redirect()->route('admin.team-members.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teamMember = TeamMember::where('id', $id)->first();
        return view('backend.team-members.show', compact('teamMember'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teamMember = TeamMember::where('id', $id)->first();
        return view('backend.team-members.edit', compact('teamMember'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TeamMember::where('id', $id)->delete();

        return back();
    }
}
