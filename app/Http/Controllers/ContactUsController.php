<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function create()
    {
        return view('contactus');
    }

    public function contactCreate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'comments' => 'required|string',
        ]);

        // dd($request->all());
        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'comments' => $request->message,
        ]);

        return redirect()->back();
    }
}
