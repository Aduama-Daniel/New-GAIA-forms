<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membership; 
use App\Models\Group;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App;


class MembershipController extends Controller
{

    public function showForm()
{
    $groups = Group::whereRaw('total_members > (SELECT COUNT(*) FROM memberships WHERE memberships.group_id = groups.id)')
        ->get();
        session();

        // dd(App::getLocale());

        
       
    return view('membership.individual', ['groups' => $groups]);
}




   

public function submitForm(Request $request)
{
    // Retrieve the form data from the session
    $formData = session()->get('form_data', []);

    $selectedGroup = Group::find($formData['group_id']);
    $formData['group_id'] = $selectedGroup->id;

    //dd($formData);

     // Merge form data and request data
     $data = array_merge($request->all(), $formData);

     $validatedData = Validator::make($data, [
         'surname' => 'required|max:255',
         'given_names' => 'required|max:255',
         'university_name' => 'required|max:255',
         'faculty_department' => 'required|max:255',
         'degree_program' => 'required|max:255',
         'age' => 'required|integer',
         'gender' => 'required|max:255',
         'email' => 'required|email|max:255',
         'phone_number' => 'required|max:255',
         'country' => 'required|max:255',
         'english_spoken' => 'required|max:255',
         'english_written' => 'required|max:255',
         'french_spoken' => 'required|max:255',
         'french_written' => 'required|max:255',
         'experience_digital_technologies' => 'required|max:255',
         'interest_earth_observation' => 'required|max:255',
         'why_join_gaia_club' => 'required|max:255',
         'personal_and_professional_goals' => 'required|max:255',
         'technical_skills' => 'required|max:255',
         'non_technical_skills' => 'required|max:255',
         'preferred_group_role' => 'required|max:255',
         'additional_information' => 'required|max:255',
     ])->validate();

    // Store the form data in the database
    $membership = Membership::create([
        'surname' => $formData['surname'],
        'given_names' => $formData['given_names'],
        'university_name' => $formData['university_name'],
        'faculty_department' => $formData['faculty_department'],
        'degree_program' => $formData['degree_program'],
        'age' => $formData['age'],
        'gender' => $formData['gender'],
        'email' => $formData['email'],
        'phone_number' => $formData['phone_number'],
       
        'english_spoken' => $formData['english_spoken'],
        'english_written' => $formData['english_written'],
        'french_spoken' => $formData['french_spoken'],
        'french_written' => $formData['french_written'],
        'experience_digital_technologies' => $request['experience_digital_technologies'],
        'interest_earth_observation' => $request['interest_earth_observation'],
        'why_join_gaia_club' => $request['why_join_gaia_club'],
        'personal_and_professional_goals' => $request['personal_and_professional_goals'],
        'technical_skills' => $request['technical_skills'],
        'non_technical_skills' => $request['non_technical_skills'],
        'preferred_group_role' => $request['preferred_group_role'],
        'additional_information' => $request['additional_information'],
        'country' => $formData['country'],
        
        'group_id' => $selectedGroup->id,
    ]);

    $request->session()->flash('success', __('User registered successfully!'));

    $request->session()->put('membership', $membership);

    return redirect()->route('groups.store');
}






// public function showNextPage(Request $request)
// {
//     // Retrieve the Membership object from the session
//     $membership = $request->session()->get('membership');

//     // Pass the Membership object to the view
//     return view('next_page', ['membership' => $membership]);
// }




    

// public function showMemberships()
// {
//     $memberships = Membership::all();
//     return view('membership.memberships', compact('memberships'));
// }


public function storePageData(Request $request, $step)
{
    // Validate the request...

    // Merge the new data with the existing data in the session
    $data = array_merge(session()->get('form_data', []), $request->all());

    // Store the data in the session
    session()->put('form_data', $data);

    // Decide which page to redirect to next based on the current step
    switch ($step) {
        case 1:
           
            return redirect()->route('language');
        case 2:
            return redirect()->route('extra');
        case 3:
            return redirect()->route('group');
        default:
            return redirect()->route('error_route');
    }
    
    }
}



    




