<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Team;
use Illuminate\Http\Request;


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
        return view('admin.team.index', compact('team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'describtion' => 'required',
            'image' => 'required|image',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'linkedin' => 'required|url',
            'instgram' => 'required|url',
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationpath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationpath, $imageName);
            $input['image'] = $imageName;
        }


        team::create($input);
        return redirect('/team')->with('message', 'data saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'name' => 'required',
            'job' => 'required',
            'describtion' => 'required',
            'image' => 'required|image',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'linkedin' => 'required|url',
            'instgram' => 'required|url',
        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationpath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationpath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }


        $team->update($input);
        return redirect('/team')->with('message', 'data ubdated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        return redirect('/team')->with('message', 'data deleted successfully');
    }
}