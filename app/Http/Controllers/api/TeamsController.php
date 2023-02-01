<?php

namespace App\Http\Controllers\api;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;




class TeamsController extends Controller
{
    use ApiResponseTrait;


    public function index()
    {
        $team = Team::get();
        if ($team) {
            return $this->ApiResponse($team, 'ok', 200);
        }
        return $this->ApiResponse(null, 'data not found ', 404);
    }



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:20',
            'job' => 'required|min:3|max:50',
            'describtion' => 'required|min:5|max:100',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'linkedin' => 'required|url',
            'instgram' => 'required|url',
        ]);
        if (!$validator->fails()) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image/'), $imageName);
            $team = new Team;
            $team->name = $request->name;
            $team->job = $request->job;
            $team->describtion = $request->describtion;
            $team->image = $imageName;
            $team->facebook = $request->facebook;
            $team->twitter = $request->twitter;
            $team->linkedin = $request->linkedin;
            $team->instgram = $request->instgram;


            $team->save();
            return $this->ApiResponse($team, 'team Created', 201);
        } else
            return $this->ApiResponse($validator->errors(), 'team dont saved', 404);
    }



    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:3|max:20',
            'job' => 'required|min:3|max:50',
            'describtion' => 'required|min:5|max:100',
            'image' => 'required|image|mimes:png,jpg,jpeg',
            'facebook' => 'required|url',
            'twitter' => 'required|url',
            'linkedin' => 'required|url',
            'instgram' => 'required|url',
        ]);
        if (!$validator->fails()) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('image/'), $imageName);

            DB::table('teams')->where('id', $id)->update([
                'name' => $request->name,
                'job' => $request->job,
                'describtion' => $request->describtion,
                'image' => $imageName,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'linkedin' => $request->linkedin,
                'instgram' => $request->instgram
            ]);
            $new_data = DB::table('teams')->where('id', $id)->get();
            return $this->ApiResponse($new_data, 'Member Updated Successfully', 200);
        } else
            return $this->ApiResponse($validator->errors(), 'data dont updated', 404);
    }







    public function destroy(Team $team)
    {
        $team->delete();
        return $this->ApiResponse(null, 'deleat Successfully', 200);
    }
}