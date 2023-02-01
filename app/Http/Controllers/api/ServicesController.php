<?php

namespace App\Http\Controllers\api;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    use ApiResponseTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
        if ($service) {
            return $this->ApiResponse($service, 'ok', 200);
        }
        return $this->ApiResponse(null, 'data not found ', 404);
    }







    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'title' => 'required',
            'describtion' => 'required',
            'icon' => 'required|image',
        ]);
        if (!$validator->fails()) {
            $imageName = time() . '.' . $request->icon->extension();
            $request->icon->move(public_path('image/'), $imageName);
            $service = new Service;
            $service->describtion = $request->describtion;
            $service->title = $request->title;
            $service->icon = $imageName;


            $service->save();
            return $this->ApiResponse($service, 'service Created', 201);
        } else
            return $this->ApiResponse($validator->errors(), 'service dont saved', 404);
    }




    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'describtion' => 'required',
            'icon' => 'required|image',
        ]);
        if (!$validator->fails()) {
            $imageName = time() . '.' . $request->icon->extension();
            $request->icon->move(public_path('image/'), $imageName);

            DB::table('services')->where('id', $id)->update([
                'title' => $request->title,
                'describtion' => $request->describtion,
                'icon' => $imageName,
            ]);
            $new_data = DB::table('services')->where('id', $id)->get();
            return $this->ApiResponse($new_data, 'service Updated Successfully', 200);
        } else
            return $this->ApiResponse($validator->errors(), 'service dont updated', 404);
    }






    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $services = $service->delete();
        return $this->ApiResponse($services, 'ok', 200);
    }
}