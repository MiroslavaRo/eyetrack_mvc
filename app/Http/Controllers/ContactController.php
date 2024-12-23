<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit_form(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => ['required', 'max:100'],
        ]);
        // dd($data);

        return redirect()->route('contact')->with('success', 'Съобщението е изпратено успешно!');
    }
}
