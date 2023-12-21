<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group; 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class GroupController extends Controller
{

    public function showForm()
    {
        return view('membership.group');
    }


    public function registerGroup(Request $request)
    {

       
          
        // Validate the form data
        $request->validate([
            'group_name' => 'nullable|unique:groups',
            'total_members' => 'nullable|integer|min:3|max:6',
            'gender_inclusivity' => 'boolean',
        ]);
    
        // if ($request->input('group_name') && $request->input('total_members')) {
        //     // Check if the group is already full
        //     $currentMembers = Group::where('group_name', $request->input('group_name'))->count();
        //     if ($currentMembers >= $request->input('total_members')) {
        //         return redirect()->back()->with('error', 'This group is already full.');
        //     }
    
        //     // Store the group data in the database
        //     Group::create($request->all());
    
        //    // Session::flash('success', 'Group registered successfully!');
        // }
    
        $groups = Group::whereRaw('total_members > (SELECT COUNT(*) FROM memberships WHERE memberships.group_id = groups.id)')
        ->get();
        $request->session()->flash('success', '.Group registered successfully!');
    
        return view('membership.individual', ['groups' => $groups]);
        
    }
    

public function getAvailableGroups()
    {
        // Get groups that are not full
        $availableGroups = Group::whereRaw('total_members > (SELECT COUNT(*) FROM memberships WHERE memberships.group_id = groups.id)')
            ->get();

        return view('userform', ['availableGroups' => $availableGroups]);
    }
}


