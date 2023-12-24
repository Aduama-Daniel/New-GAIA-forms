<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use App\Models\Member; // Make sure to import your actual model
use App\Models\Membership; // Make sure to import your actual model

class UserController extends Controller
{
    public function showDetails($userId)
{
    // Fetch user details with the related group name
    $user = Membership::with('group')->find($userId);

    // Pass the user details to the view
    return view('details', ['user' => $user]);
}

}
