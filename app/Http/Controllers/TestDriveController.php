<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class TestDriveController extends Controller
{
    public function index()
    {    
        return view('register.index');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'preferred_date' => 'required',
            'preferred_time' => 'required',
        ]);
        $register = new Registration;
        $register->name = $request->name;
        $register->email = $request->email;
        $register->phone = $request->phone;
        $register->address = $request->address;
        $register->preferred_date = $request->preferred_date;
        $register->preferred_time = $request->preferred_time;
        $register->save();

        return redirect()->route('register.index')
                ->with('success','Registration successful! We will contact you to confirm the test drive appointment.'); 
    }
}
