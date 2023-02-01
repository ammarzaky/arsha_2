<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Massage;

class MessageController extends Controller
{
    use ApiResponseTrait;


    public function index()
    {
        $massages = Massage::all();
        if ($massages) {
            return $this->ApiResponse($massages, 'ok', 200);
        }
        return $this->ApiResponse(null, 'data not found ', 404);
    }


    public function destroy(Massage $Massage)
    {
        $Massage->delete();
        return $this->ApiResponse(null, 'deleat Successfully', 200);
    }
}