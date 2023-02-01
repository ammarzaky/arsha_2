<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMassage(Request $request)
    {

        $validated = request()->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required',
            'subject' => 'required|min:6|max:150',
            'massage' => 'required|min:6|max:1500',
        ]);

        if ($validated) {

            DB::table('massages')->insert([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'massage' => $request->massage,
            ]);

            Mail::to(request('name'))->send(new ContactMe());
            return back()->with('success', 'your message sent successfully !');
        }

        return back()->with('error', $request->error());
    }
}
