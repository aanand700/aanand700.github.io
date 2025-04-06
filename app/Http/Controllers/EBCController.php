<?php

namespace App\Http\Controllers;

use App\Models\EBC;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EBCController extends Controller
{
    public function storeEBC(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|string',
            'email' => 'required|string',
            'baseline_kwh' => 'required|string',
            'program_option' => 'required|string',
            'scl_meter' => 'required|string',
            'purchase_invoices' => 'required|mimes:jpeg,jpg,png,gif,webp,avif',
        ]);

        if ($request->hasFile('purchase_invoices')) {
            $purchaseInvoices = Str::random(20) . '.' . $request->purchase_invoices->extension();
            $request->purchase_invoices->storeAs('public/images', $purchaseInvoices);
        } else {
            $purchaseInvoices = null;
        }

        $ebc = new EBC();
        $ebc->submitted_by = Auth::user()->id;
        $ebc->first_name = $request->first_name;
        $ebc->last_name = $request->last_name;
        $ebc->address = $request->address;
        $ebc->city = $request->city;
        $ebc->zip_code = $request->zip_code;
        $ebc->state = $request->state;
        $ebc->email = $request->email;
        $ebc->baseline_kwh = $request->baseline_kwh;
        $ebc->program_option = $request->program_option;
        $ebc->scl_meter = $request->scl_meter;
        $ebc->purchase_invoices = $purchaseInvoices;
        $ebc->save();

        return response()->json(['message' => 'EBC stored successfully!', 'data' => $ebc], 201);
    }
}
