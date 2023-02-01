<?php

namespace App\Http\Controllers\api;

use App\Models\type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class TitlesController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
        $title = type::all();
        if ($title) {
            return $this->ApiResponse($title, 'success', 200);
        }
        return $this->ApiResponse(null, 'data not found ', 404);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'possition' => 'required',
            'title' => 'required',
            'body' => 'required',
        ]);
        if (!$validator->fails()) {

            $type = new type;
            $type->body = $request->body;
            $type->possition = $request->possition;
            $type->title = $request->title;


            $type->save();
            return $this->ApiResponse($type, 'title Created', 201);
        } else
            return $this->ApiResponse($validator->errors(), 'title dont saved', 404);
    }



    public function update(Request $request, $possition)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
        ]);
        if (!$validator->fails()) {
            DB::table('types')->where('possition', $possition)->update([
                'title' => $request->title,
                'body' => $request->body,
            ]);
            $new_data = DB::table('types')->where('possition', $possition)->get();
            return $this->ApiResponse($new_data, 'title Updated Successfully', 200);
        } else
            return $this->ApiResponse($validator->errors(), 'title dont updated', 404);
    }
}