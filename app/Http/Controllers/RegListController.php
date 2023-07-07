<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegListController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');
        $sort = $request->input('sort');
    
        $registrations = Registration::query()
            ->when($query, function ($q) use ($query) {
                return $q->where('name', 'like', '%'.$query.'%')
                         ->orWhere('id', 'like', '%'.$query.'%');
            });
    
        if ($sort === 'eligible') {
            $registrations->orderBy('eligibility', 'desc')
                         ->orderBy('created_at', 'desc');
        } elseif ($sort === 'not-eligible') {
            $registrations->orderBy('eligibility', 'asc')
                         ->orderBy('created_at', 'desc');
        } else {
            $registrations->orderBy('id');
        }
    
        $registrations = $registrations->paginate(10);
    
        return view('reglist.index', compact('registrations'));
    }
            
    public function edit($id)
    {
        $registration = Registration::findOrFail($id);
        return view('reglist.edit', compact('registration'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'purchase_status' => 'required',
        ]);
    
        $registration = Registration::findOrFail($id);
        $registration->purchase_status = $request->purchase_status;
        
        // Only update the down payment if it's provided
        if ($request->has('down_payment')) {
            $registration->down_payment = $request->down_payment;
        }
    
        // Only update the loan amount if it's provided
        if ($request->has('loan_amount')) {
            $registration->loan_amount = $request->loan_amount;
        }

        // Check Eligibility
        if ($registration->id <= 10 && $registration->down_payment >= 10) {
            $registration->eligibility = true;
        } else {
            $registration->eligibility = false;
        }
            
        $registration->save();
    
        return redirect()->route('reglist.index')->with('success','Customer details have been updated successfully');
    }

}
