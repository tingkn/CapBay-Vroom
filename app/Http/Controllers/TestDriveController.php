<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class TestDriveController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');

        $register = Registration::query()
            ->when($query, function ($q) use ($query) {
                return $q->where('name', 'like', '%'.$query.'%')
                        ->orWhere('email', 'like', '%'.$query.'%');
            })
            ->orderByDesc('created_at')
            ->paginate(3);

        return view('register.index', compact('register'));

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
