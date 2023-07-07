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
            $registrations->orderBy('eligibility', 'desc') // Display all Eligible at the top
                         ->orderBy('created_at', 'desc'); // Then display the most recent registration on top
        } elseif ($sort === 'not-eligible') {
            $registrations->orderBy('eligibility', 'asc') // Display all Not Eligible at the top
                         ->orderBy('created_at', 'desc'); // Then display the most recent registration on top
        } else {
            $registrations->orderBy('id'); 
        }
    
        $registrations = $registrations->paginate(10);
    
        return view('reglist.index', compact('registrations'));
    }
            
    public function edit($id)
    {
        $registration = Registration::findOrFail($id);
        
        // Calculate Loan Amount
        $totalCost = 200000; // Assuming the total cost of the car is RM 200,000
        $discount = 0.15; // 15% discount for eligible customers
        if ($registration->id <= 10 && $registration->down_payment >= 10) {
            $loanAmount = $totalCost - ($registration->down_payment * $totalCost / 100) - ($totalCost * $discount);
            $eligibility = true;
        } else {
            $loanAmount = $totalCost - ($registration->down_payment * $totalCost / 100);
            $eligibility = false;
        }
        
        return view('reglist.edit', ['registration' => $registration, 'loanAmount' => $loanAmount]);
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

        // Check Eligibility
        if ($registration->id <= 10 && $registration->down_payment >= 10) {
            $registration->eligibility = true;

            // Calculate Loan Amount
            $totalCost = 200000; // Assuming the total cost of the car is RM 200,000
            $discount = 0.15; // 15% discount for eligible customers
            $loanAmount = $totalCost - ($registration->down_payment * $totalCost / 100) - ($totalCost * $discount);
            $registration->loan_amount = $loanAmount;
        } else {
            $registration->eligibility = false;
            // Calculate Loan Amount
            $totalCost = 200000; // Assuming the total cost of the car is RM 200,000
            $loanAmount = $totalCost - ($registration->down_payment * $totalCost / 100); // No discount for Not Eligible
            $registration->loan_amount = $loanAmount;
        }

        $registration->save();

        return redirect()->route('reglist.index')->with('success', 'Customer details have been updated successfully');
    }
}
