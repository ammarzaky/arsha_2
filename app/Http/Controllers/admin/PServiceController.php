<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PService;
use Illuminate\Http\Request;

class PServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pservices = PService::all();
        return view('admin.pservice.index', compact('pservices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pservice.create');
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
            'service' => 'required',
        ]);
        $input = $request->all();
        PService::create($input);
        return redirect('/pservice')->with('message', 'data saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function show(PService $pservices)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(PService $pservice)
    {
        return view('admin.pservice.edit', compact('pservice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PService $pservice)
    {
        $request->validate([
            'name' => 'required',
            'service' => 'required',
        ]);
        $input = $request->all();
        $pservice->update($input);
        return redirect('/pservice')->with('message', 'data saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(PService $pservice)
    {
        $pservice->delete();
        return redirect('/pservice')->with('message', 'data deleted successfully');
    }
}