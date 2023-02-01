<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Clint;
use Illuminate\Http\Request;

class ClintsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clints = Clint::all();
        return view('admin.clints.index', compact('clints'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clints.create');
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
            'image' => 'required|image',

        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationpath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationpath, $imageName);
            $input['image'] = $imageName;
        }



        Clint::create($input);
        return redirect('/clints')->with('message', 'data saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Clint $clint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Clint $clint)
    {
        return view('admin.clints.edit', compact('clint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clint $clint)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',

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


        $clint->update($input);
        return redirect('/clints')->with('message', 'data saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clint $clint)
    {
        $clint->delete();
        return redirect('/clints')->with('message', 'data deleted successfully');
    }
}