<?php

namespace App\Http\Controllers;

use App\Models\UserDetails;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{
    // public function showUserDetails(){
    //     return view('pages.userDetails');
    // }

    public function showUserDetails(Request $request)
    {
        return view('pages.userDetails');
    }

    public function submitDetails(Request $request)
    {
        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string',
            'zip_code' => 'required|integer',
            'utility_name' => 'required|string|max:255',
            'utility_acc_number' => 'required|integer',
        ]);

        $userDetails = new UserDetails();
        $userDetails->user_id = auth()->user()->id;
        $userDetails->address = $request->address;
        $userDetails->city = $request->city;
        $userDetails->state = $request->state;
        $userDetails->zip_code = $request->zip_code;
        $userDetails->utility_name = $request->utility_name;
        $userDetails->utility_acc_number = $request->utility_acc_number;
        $userDetails->save();

        return response()->json(['message' => 'Details submitted successfully']);
    }


}
