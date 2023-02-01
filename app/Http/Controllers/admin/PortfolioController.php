<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        return view('admin.portfolios.index', compact('portfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolios.create');
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
            'catigories' => 'required',
            'image' => 'required|image',

        ]);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationpath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationpath, $imageName);
            $input['image'] = $imageName;
        }


        Portfolio::create($input);
        return redirect('/portfolios')->with('message', 'data saved successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        return view('admin.portfolios.edit', compact('portfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'name' => 'required',
            'catigories' => 'required',
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


        $portfolio->update($input);
        return redirect('/portfolios')->with('message', 'data ubdated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect('/portfolios')->with('message', 'data deleted successfully');
    }
}