<?php

namespace App\Http\Controllers;

use App\Models\DRPP;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DRPPController extends Controller
{
    public function storeDRPP(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'program_type' => 'required|string',
            'contact_first_name' => 'required|string',
            'contact_last_name' => 'required|string',
            'address' => 'required|string',
            'city' => 'required|string',
            'state' => 'required|string',
            'zip_code' => 'required|numeric',
            'scl_account' => 'required|string',
            'contact_email' => 'required|email',
            'baseline_kwh' => 'required|string',
            'contractor_company' => 'required|string',
            'contractor_name' => 'required|string',
            'contractor_email' => 'required|email',
            'sdci_permit' => 'required|string',
            'equipment_pictures' => 'nullable|mimes:jpeg,jpg,png,gif,webp,avif|max:2048', // Validate image types and size
            'purchase_invoices' => 'nullable|mimes:jpeg,jpg,png,gif,webp,avif|max:2048', // Validate image types and size
        ]);

        if ($request->hasFile('equipment_pictures')) {
            $equipmentFileName = Str::random(20) . '.' . $request->equipment_pictures->extension();
            $request->equipment_pictures->storeAs('public/images', $equipmentFileName);
        } else {
            $equipmentFileName = null;
        }

        if ($request->hasFile('purchase_invoices')) {
            $invoiceFileName = Str::random(20) . '.' . $request->purchase_invoices->extension();
            $request->purchase_invoices->storeAs('public/images', $invoiceFileName);
        } else {
            $invoiceFileName = null;
        }

        $drpp = new DRPP();
        $drpp->submitted_by = Auth::user()->id;
        $drpp->program_type = $request->program_type;
        $drpp->contact_first_name = $request->contact_first_name;
        $drpp->contact_last_name = $request->contact_last_name;
        $drpp->address = $request->address;
        $drpp->city = $request->city;
        $drpp->state = $request->state;
        $drpp->zip_code = $request->zip_code;
        $drpp->scl_account = $request->scl_account;
        $drpp->contact_email = $request->contact_email;
        $drpp->baseline_kwh = $request->baseline_kwh;
        $drpp->contractor_company = $request->contractor_company;
        $drpp->contractor_name = $request->contractor_name;
        $drpp->contractor_email = $request->contractor_email;
        $drpp->sdci_permit = $request->sdci_permit;
        $drpp->equipment_pictures = $equipmentFileName;
        $drpp->purchase_invoices = $invoiceFileName;
        $drpp->save();

        return response()->json(['message' => 'DRPP stored successfully!', 'data' => $drpp], 201);
    }

}
