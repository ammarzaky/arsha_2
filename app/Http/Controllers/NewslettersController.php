<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewslettersController extends Controller
{
    public function sendmail(Request $requect1)
    {

        $validated = $requect1->validate([

            'email' => 'required|email',

        ]);

        if ($validated) {

            DB::table('newsletters')->insert([

                'email' => $requect1->email,

            ]);
            $message = [

                'email' => $requect1->email,

            ];
            return back()->with('email_success', 'your email sent successfully !');
        }

        // return back()->with('error', $request->error());
    }
}