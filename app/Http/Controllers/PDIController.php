<?php

namespace App\Http\Controllers;

use App\Models\PDI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PDIController extends Controller
{
    public function storePDI(Request $request)
    {
        $validatedData = $request->validate([
            'program_name' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|string',
        ]);

        $pdi = new PDI();
        $pdi->submitted_by = Auth::user()->id;
        $pdi->program_name = $request->program_name;
        $pdi->phone_number = $request->phone_number;
        $pdi->email = $request->email;
        $pdi->save();

        return response()->json(['message' => 'Pdi stored successfully!', 'data' => $pdi], 201);

    }
}
