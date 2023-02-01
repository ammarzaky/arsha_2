<?php

namespace App\Http\Controllers\api;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class QuestionController extends Controller
{
    use ApiResponseTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        if ($questions) {
            return $this->ApiResponse($questions, 'success', 200);
        }
        return $this->ApiResponse(null, 'data not found ', 404);
    }




    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'que' => 'required',
            'ans' => 'required',
        ]);
        if (!$validator->fails()) {

            $question = new question;
            $question->que = $request->que;
            $question->ans = $request->ans;


            $question->save();
            return $this->ApiResponse($question, 'question Created', 201);
        } else
            return $this->ApiResponse($validator->errors(), 'question dont saved', 404);
    }



    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [

            'que' => 'required',
            'ans' => 'required',
        ]);
        if (!$validator->fails()) {
            DB::table('questions')->where('id', $id)->update([
                'que' => $request->que,
                'ans' => $request->ans,
            ]);
            $new_data = DB::table('questions')->where('id', $id)->get();
            return $this->ApiResponse($new_data, 'clint Updated Successfully', 200);
        } else
            return $this->ApiResponse($validator->errors(), 'clint dont updated', 404);
    }




    public function update1(Request $request, Question $question)
    {
        $request->validate([
            'que' => 'required',
            'ans' => 'required',
        ]);
        $input = $request->all();
        $questions =   $question->update($input);
        return $this->ApiResponse($questions, 'success', 200);
    }


    public function destroy(Question $question)
    {
        $questions = $question->delete();
        return $this->ApiResponse($questions, 'success', 200);
    }
}