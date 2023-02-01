<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Massage;
use Illuminate\Http\Request;

class MassagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $massages = Massage::all();
        return view('admin.massages.index', compact('massages'));
    }


    public function destroy(Massage $massage)
    {
        $massage->delete();
        return redirect('/massages')->with('message', 'data deleted successfully');
    }
}