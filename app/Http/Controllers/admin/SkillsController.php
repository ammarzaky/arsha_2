<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\skill;
use Illuminate\Http\Request;
use Validator;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = skill::all();
        return view('admin.skills.index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skills.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $rules = array(
            'name' => 'required',
            'degree' => 'required',
        );

        $validator = validator::make($request->all, $rules);




        // $request->validate([
        //     'name' => 'required',
        //     'degree' => 'required',
        // ]);
        // $input = $request->all();
        // skill::create($input);
        // return redirect('/skills')->with('message', 'data saved successfully');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(skill $skill)
    {
        return view('admin.skills.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, skill $skill)
    {
        $request->validate([
            'name' => 'required',
            'degree' => 'required',
        ]);
        $input = $request->all();
        $skill->update($input);
        return redirect('/skills')->with('message', 'data saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(skill $skill)
    {
        $skill->delete();
        return redirect('/skills')->with('message', 'data deleted successfully');
    }
}