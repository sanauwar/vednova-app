<?php

namespace App\Http\Controllers;

use App\Models\FreeConsultation;

use Illuminate\Http\Request;

class FreeConsultationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'country' => 'required',
            'interest' => 'required'
        ]);

        FreeConsultation::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country' => $request->country,
            'interest' => $request->interest,
            'ip_address' => $request->ip()
        ]);

        return response()->json([
            'success' => true
        ]);
    }
}
