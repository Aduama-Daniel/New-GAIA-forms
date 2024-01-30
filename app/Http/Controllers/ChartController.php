<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Member; // Make sure to import your actual model
use App\Models\Membership; // Make sure to import your actual model
use App\Models\Group; // Make sure to import your actual model
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ChartController extends Controller
{
    public function dashboard()
{
   // Gender Statistics
    $genderStatistics = DB::table('memberships')
        ->select(DB::raw('gender'), DB::raw('count(*) as count'))
        ->groupBy('gender')
        ->get();

    //Age Range Statistics


        $ageRangeStatistics = DB::table('memberships')
        ->select(DB::raw('FLOOR(age / 5) * 5 as age_range'), DB::raw('count(*) as count'))
        ->groupBy('age_range')
        ->get();
    

    // Country Statistics
    $countryStatistics = DB::table('memberships')
        ->select('country', DB::raw('count(*) as count'))
        ->groupBy('country')
        ->get();

    // Fetch other data as needed

    $members = Membership::join('groups', 'memberships.group_id', '=', 'groups.id')
    ->select('memberships.*', 'groups.group_name')
    ->orderBy('memberships.id', 'desc') // Order by 'id' in ascending order
    ->paginate(10);



        $todaySignups = DB::table('memberships')
        ->select(DB::raw('DATE(created_at) as date'), DB::raw('count(*) as signups'))
        ->whereDate('created_at', Carbon::today())
        ->groupBy('date')
        ->first();

        $totalRegistrations = DB::table('memberships')->count();
        $totalGroups = Group::count();

        // Language Proficiency Statistics
    $englishSpoken = DB::table('memberships')
    ->select('english_spoken', DB::raw('count(*) as total'))
    ->groupBy('english_spoken')
    ->pluck('total', 'english_spoken');

$englishWritten = DB::table('memberships')
    ->select('english_written', DB::raw('count(*) as total'))
    ->groupBy('english_written')
    ->pluck('total', 'english_written');

$frenchSpoken = DB::table('memberships')
    ->select('french_spoken', DB::raw('count(*) as total'))
    ->groupBy('french_spoken')
    ->pluck('total', 'french_spoken');

$frenchWritten = DB::table('memberships')
    ->select('french_written', DB::raw('count(*) as total'))
    ->groupBy('french_written')
    ->pluck('total', 'french_written');

    $experienceDigitalTech = DB::table('memberships')
    ->select('experience_digital_technologies', DB::raw('count(*) as total'))
    ->groupBy('experience_digital_technologies')
    ->pluck('total', 'experience_digital_technologies');





    

    return view('admincharts', compact('experienceDigitalTech', 'genderStatistics', 'countryStatistics', 'ageRangeStatistics',  'englishSpoken', 'englishWritten', 'frenchSpoken', 'frenchWritten'));
}
}
