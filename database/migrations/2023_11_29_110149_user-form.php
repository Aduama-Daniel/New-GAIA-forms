<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('user-form', function (Blueprint $table) {
            // Group Information
           

            // Individual Member Information
            $table->string('surname');
            $table->string('given_names');
            $table->string('university_name');
            $table->string('faculty_department');
            $table->string('degree_program');
            $table->string('year_of_study');
            $table->string('university_id_number');
            $table->integer('age');
            $table->string('gender');
            $table->string('email');
            $table->string('phone_number');

            // Language Proficiency
            $table->json('english_proficiency');
            $table->json('french_proficiency');

            // Background and Interests
            $table->enum('experience_digital_technologies', ['None', 'Basic', 'Intermediate', 'Advanced']);
            $table->text('interest_earth_observation')->nullable();

            // Why join GAIA Club
            $table->text('why_join_gaia_club');

            // Personal and Professional Goals
            $table->text('personal_and_professional_goals');

            // Skills and Contributions
            $table->text('technical_skills');
            $table->text('non_technical_skills');

            // Group Participation
            $table->enum('preferred_group_role', ['Research and Conceptualization', 'Technical Development', 'Project Management', 'Communication and Outreach']);

            // Additional Information
            $table->text('additional_information')->nullable();

            // Declaration
            $table->text('declaration');
            $table->date('date');

            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
