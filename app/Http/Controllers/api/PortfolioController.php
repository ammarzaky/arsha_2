<?php

namespace App\Http\Controllers\api;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class PortfolioController extends Controller
{
    use ApiResponseTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolios = Portfolio::all();
        if ($portfolios) {
            return $this->ApiResponse($portfolios, 'ok', 200);
        }
        return $this->ApiResponse(null, 'data not found ', 404);
    }



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'catigories' => 'required',
            'image' => 'required|image'
        ]);
        if (!$validator->fails()) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image/'), $imageName);
            $portfolio = new Portfolio;
            $portfolio->name = $request->name;
            $portfolio->catigories = $request->catigories;
            $portfolio->image = $imageName;


            $portfolio->save();
            return $this->ApiResponse($portfolio, 'portfolio Created', 201);
        } else
            return $this->ApiResponse($validator->errors(), 'portfolio dont saved', 404);
    }





    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'catigories' => 'required',
            'image' => 'required|image'
        ]);
        if (!$validator->fails()) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image/'), $imageName);

            DB::table('portfolios')->where('id', $id)->update([
                'name' => $request->name,
                'catigories' => $request->catigories,
                'image' => $imageName,
            ]);
            $new_data = DB::table('portfolios')->where('id', $id)->get();
            return $this->ApiResponse($new_data, 'clint Updated Successfully', 200);
        } else
            return $this->ApiResponse($validator->errors(), 'clint dont updated', 404);
    }







    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        $portfolios = $portfolio->delete();
        return $this->ApiResponse(null, 'dleated', 200);
    }
}