<?php

namespace App\Http\Controllers\api;

use App\Models\skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SkillsController extends Controller
{

    use ApiResponseTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skills = skill::all();
        if ($skills) {
            return $this->ApiResponse($skills, 'ok', 200);
        }
        return $this->ApiResponse(null, 'data not found ', 404);
    }





    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'degree' => 'required',
        ]);
        if (!$validator->fails()) {

            $skill = new skill;
            $skill->name = $request->name;
            $skill->degree = $request->degree;


            $skill->save();
            return $this->ApiResponse($skill, 'skill Created', 201);
        } else
            return $this->ApiResponse($validator->errors(), 'skill dont saved', 404);
    }





    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'degree' => 'required',
        ]);
        if (!$validator->fails()) {

            DB::table('skills')->where('id', $id)->update([
                'name' => $request->name,
                'degree' => $request->degree,
            ]);
            $new_data = DB::table('skills')->where('id', $id)->get();
            return $this->ApiResponse($new_data, 'skill Updated Successfully', 200);
        } else
            return $this->ApiResponse($validator->errors(), 'skill dont updated', 404);
    }






    public function destroy(skill $skill)
    {
        $skills =   $skill->delete();
        return $this->ApiResponse($skills, 'ok', 200);
    }
}