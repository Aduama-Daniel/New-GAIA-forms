<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member; // Make sure to import your actual model
use App\Models\Membership; // Make sure to import your actual model

class MembersController extends Controller
{
    public function index()
    {
        $members = Membership::join('groups', 'memberships.group_id', '=', 'groups.id')
        ->select('memberships.*', 'groups.group_name')
        ->orderBy('memberships.created_at', 'desc') // Order by the creation time in descending order
        ->paginate(10);
    
    return view('forms', ['members' => $members]);
    
    }
}
