<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{


    use HasFactory;

    protected $fillable = [
        
        'surname',
        'given_names',
        'university_name',
        'faculty_department',
        'degree_program',
        'year_of_study',
        'university_id_number',
        'age',
        'gender',
        'email',
        'phone_number',
        'english_spoken',
        'english_written',
        'french_spoken',
        'french_written',
        'experience_digital_technologies',
        'interest_earth_observation',
        'why_join_gaia_club',
        'personal_and_professional_goals',
        'technical_skills',
        'non_technical_skills',
        'preferred_group_role',
        'additional_information',
        'declaration',
        'date',
        'group_id',
    ];

    protected $casts = [
        'english_proficiency' => 'array',
        'french_proficiency' => 'array',
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}





