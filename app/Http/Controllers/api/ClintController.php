<?php

namespace App\Http\Controllers\api;

use App\Models\Clint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class ClintController extends Controller
{
    use ApiResponseTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clints = Clint::all();
        if ($clints) {
            return $this->ApiResponse($clints, 'ok', 200);
        }
        return $this->ApiResponse(null, 'data not found ', 404);
    }



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required|min:3|max:20',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        if (!$validator->fails()) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image/'), $imageName);
            $clint = new clint;
            $clint->name = $request->name;
            $clint->image = $imageName;


            $clint->save();
            return $this->ApiResponse($clint, 'clint Created', 201);
        } else
            return $this->ApiResponse($validator->errors(), 'clint dont saved', 404);
    }




    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:20',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        if (!$validator->fails()) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image/'), $imageName);

            DB::table('clints')->where('id', $id)->update([
                'name' => $request->name,
                'image' => $imageName,
            ]);
            $new_data = DB::table('clints')->where('id', $id)->get();
            return $this->ApiResponse($new_data, 'clint Updated Successfully', 200);
        } else
            return $this->ApiResponse($validator->errors(), 'clint dont updated', 404);
    }






    public function update1(Request $request, Clint $clint)
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


        $clints = $clint->update($input);
        return $this->ApiResponse($clints, 'ok', 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clint $clint)
    {
        $clint->delete();
        return $this->ApiResponse(null, 'deleat Successfully', 200);
    }
}