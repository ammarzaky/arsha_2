<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\type;
use Illuminate\Http\Request;

class TypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = type::all();
        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.types.create');
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
            'possition' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);
        $input = $request->all();
        Type::create($input);
        return redirect('/types')->with('message', 'data saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function show(type $types)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(type $type)
    {
        return view('admin.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, type $type)
    {
        $request->validate([
            'possition' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);
        $input = $request->all();
        $type->update($input);
        return redirect('/types')->with('message', 'data saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(type $type)
    {
        $type->delete();
        return redirect('/types')->with('message', 'data deleted successfully');
    }
}