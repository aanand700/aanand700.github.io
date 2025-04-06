<?php

namespace App\Http\Controllers;

use App\Models\SBR;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SBRController extends Controller
{
    public function storeSBR(Request $request)
    {
        $validatedData = $request->validate([
            'facility_name' => 'required|string',
            'installation_street' => 'required|string',
            'installation_city' => 'required|string',
            'installation_state' => 'required|string',
            'installation_zip_code' => 'required|string',
            'building_type' => 'required|string',
            'is_new_building' => 'required|string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'customer_email' => 'required|string',
            'phone_number' => 'required|string',
            'account_number' => 'required|string',
            'picture_of_the_building' => 'required|mimes:jpeg,jpg,png,gif,webp,avif',
            'purchase_invoices' => 'required|mimes:jpeg,jpg,png,gif,webp,avif',
        ]);

        if ($request->hasFile('picture_of_the_building')) {
            $pictureOfTheBuilding = Str::random(20) . '.' . $request->picture_of_the_building->extension();
            $request->picture_of_the_building->storeAs('public/images', $pictureOfTheBuilding);
        } else {
            $pictureOfTheBuilding = null;
        }

        if ($request->hasFile('purchase_invoices')) {
            $purchaseInvoices = Str::random(20) . '.' . $request->purchase_invoices->extension();
            $request->purchase_invoices->storeAs('public/images', $purchaseInvoices);
        } else {
            $purchaseInvoices = null;
        }

        $sbr = new SBR();
        $sbr->submitted_by = Auth::user()->id;
        $sbr->facility_name = $request->facility_name;
        $sbr->installation_street = $request->installation_street;
        $sbr->installation_city = $request->installation_city;
        $sbr->installation_state = $request->installation_state;
        $sbr->installation_zip_code = $request->installation_zip_code;
        $sbr->building_type = $request->building_type;
        $sbr->is_new_building = $request->is_new_building;
        $sbr->first_name = $request->first_name;
        $sbr->last_name = $request->last_name;
        $sbr->customer_email = $request->customer_email;
        $sbr->phone_number = $request->phone_number;
        $sbr->account_number = $request->account_number;
        $sbr->picture_of_the_building = $pictureOfTheBuilding;
        $sbr->purchase_invoices = $purchaseInvoices;
        $sbr->save();

        return response()->json(['message' => 'Sbr stored successfully!', 'data' => $sbr], 201);
    }

}
