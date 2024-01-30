<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member; // Make sure to import your actual model
use App\Models\Membership; // Make sure to import your actual model
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SearchController extends Controller
{
    public function search(Request $request)
{
    $search = $request->input('search');
    $memberships = Membership::where('name', 'LIKE', '%' . $search . '%')->get();
    return view('search-results', compact('memberships'));
}

}
