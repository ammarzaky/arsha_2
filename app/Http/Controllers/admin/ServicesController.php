<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        return view('admin.services.index', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'title' => 'required',
            'describtion' => 'required',
            'icon' => 'required|image',

        ]);
        $input = $request->all();

        if ($icon = $request->file('icon')) {
            $destinationpath = 'icon/';
            $iconName = $icon->getClientOriginalName();
            $icon->move($destinationpath, $iconName);
            $input['icon'] = $iconName;
        }


        service::create($input);
        return redirect('/services')->with('message', 'data saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'title' => 'required',
            'describtion' => 'required',
            'icon' => 'required|image',

        ]);
        $input = $request->all();

        if ($icon = $request->file('icon')) {
            $destinationpath = 'icon/';
            $iconName = $icon->getClientOriginalName();
            $icon->move($destinationpath, $iconName);
            $input['icon'] = $iconName;
        } else {
            unset($input['icon']);
        }


        $service->update($input);
        return redirect('/services')->with('message', 'data saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect('/services')->with('message', 'data deleted successfully');
    }
}