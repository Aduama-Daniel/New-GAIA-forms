<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>GAIA Club Membership Form</title>


    <style>
        /* Custom CSS for form width */
        .custom-width {
            max-width: 600px; /* Adjust the max-width as needed */
            margin: auto;
        }
    </style>
</head>



<body class="container">
<div class="container custom-width">
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('membership.submit') }}" method="post" class="mt-4">
    @csrf <!-- Laravel CSRF token -->

    <!-- Individual Member Information Section -->

    <div class="form-group">
    <label for="existing_group">Select Existing Group:</label>
    <select id="existing_group" name="group_id" class="form-control">
        <option value="" selected disabled>Select a group</option>
        @foreach($groups as $group)
            <option value="{{ $group->id }}">{{ $group->group_name }}</option>
        @endforeach
    </select>
</div>




    <h2 class="mt-3">Individual Member Information</h2>

    <!-- Repeat the following block for each member -->
    <div class="form-group">
        <label for="surname">1. Surname:</label>
        <input type="text" class="form-control" id="surname" name="surname" required>
    </div>

    <div class="form-group">
        <label for="given_name">2. Given Name(s):</label>
        <input type="text" class="form-control" id="given_name" name="given_names" required>
    </div>

    <div class="form-group">
        <label for="university_name">3. University Name:</label>
        <input type="text" class="form-control" id="university_name" name="university_name" required>
    </div>

    <div class="form-group">
        <label for="faculty_department">4. Faculty/Department:</label>
        <input type="text" class="form-control" id="faculty_department" name="faculty_department" required>
    </div>

    <div class="form-group">
        <label for="degree_program">5. Degree Program (e.g., BSc Physics):</label>
        <input type="text" class="form-control" id="degree_program" name="degree_program" required>
    </div>

    <div class="form-group">
        <label for="year_of_study">6. Year of Study (e.g., 2022 - 2026):</label>
        <input type="text" class="form-control" id="year_of_study" name="year_of_study" required>
    </div>

    <div class="form-group">
        <label for="university_id_number">7. University ID Number:</label>
        <input type="text" class="form-control" id="university_id_number" name="university_id_number" required>
    </div>

    <div class="form-group">
        <label for="age">8. Age:</label>
        <input type="number" class="form-control" id="age" name="age" required>
    </div>

    <div class="form-group">
        <label for="gender">9. Gender:</label>
        <input type="text" class="form-control" id="gender" name="gender" required>
    </div>

    <div class="form-group">
        <label for="email">10. Contact Information:</label>
        <div class="form-row">
            <div class="col">
                <label>Email Address:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col">
                <label>Phone Number:</label>
                <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
            </div>
        </div>
    </div>

    <!-- Language Proficiency Section -->
    <h2 class="mt-3">Language Proficiency</h2>

    <div class="form-group">
    <label>English Proficiency:</label>
    <div>
    <label>Spoken:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="english_spoken" value="Basic">
            <label class="form-check-label">Basic</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="english_spoken" value="Intermediate">
            <label class="form-check-label">Intermediate</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="english_spoken" value="Fluent">
            <label class="form-check-label">Fluent</label>
        </div>
    </div>
    <div>
    <label>Written:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="english_written" value="Basic">
            <label class="form-check-label">Basic</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="english_written" value="Intermediate">
            <label class="form-check-label">Intermediate</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="english_written" value="Fluent">
            <label class="form-check-label">Fluent</label>
        </div>
    </div>
</div>

<div class="form-group">
    <label>French Proficiency:</label>
    <div>
    <label>Spoken:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="french_spoken" value="Basic">
            <label class="form-check-label">Basic</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="french_spoken" value="Intermediate">
            <label class="form-check-label">Intermediate</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="french_spoken" value="Fluent">
            <label class="form-check-label">Fluent</label>
        </div>
    </div>
    <div>
    <label>Written:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="french_written" value="Basic">
            <label class="form-check-label">Basic</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="french_written" value="Intermediate">
            <label class="form-check-label">Intermediate</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="french_written" value="Fluent">
            <label class="form-check-label">Fluent</label>
        </div>
    </div>
</div>


    <!-- Background and Interests Section -->
    <h2 class="mt-3">Background and Interests</h2>

    <div class="form-group">
        <label for="experience_digital_technologies">12. Previous Experience with Digital Technologies:</label>
        <select class="form-control" id="experience_digital_technologies" name="experience_digital_technologies">
            <option value="None">None</option>
            <option value="Basic">Basic</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Advanced">Advanced</option>
        </select>
    </div>

    <div class="form-group">
        <label for="interest_earth_observation">13. Specific Interest in Earth Observation and IoT:</label>
        <textarea class="form-control" id="interest_earth_observation" name="interest_earth_observation" rows="4"></textarea>
    </div>

    <div class="form-group">
        <label for="why_join_gaia_club">14. Why do you want to join the GAIA Club?</label>
        <textarea class="form-control" id="why_join_gaia_club" name="why_join_gaia_club" rows="4"></textarea>
    </div>

    <div class="form-group">
        <label for="personal_professional_goals">15. Personal and Professional Goals:</label>
        <textarea class="form-control" id="personal_professional_goals" name="personal_and_professional_goals" rows="4"></textarea>
    </div>

    <!-- Skills and Contributions Section -->
    <h2 class="mt-3">Skills and Contributions</h2>

    <div class="form-group">
        <label for="technical_skills">16. Technical Skills:</label>
        <textarea class="form-control" id="technical_skills" name="technical_skills" rows="4"></textarea>
    </div>

    <div class="form-group">
        <label for="non_technical_skills">17. Non-Technical Skills:</label>
        <textarea class="form-control" id="non_technical_skills" name="non_technical_skills" rows="4"></textarea>
    </div>

    <!-- Group Participation Section -->
    <h2 class="mt-3">Group Participation</h2>

    <div class="form-group">
        <label for="preferred_group_role">18. Preferred Group Role:</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="preferred_group_role" value="Research and Conceptualization" id="role_research">
            <label class="form-check-label" for="role_research">Research and Conceptualization</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="preferred_group_role" value="Technical Development" id="role_technical">
            <label class="form-check-label" for="role_technical">Technical Development</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="preferred_group_role" value="Project Management" id="role_management">
            <label class="form-check-label" for="role_management">Project Management</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="preferred_group_role" value="Communication and Outreach" id="role_communication">
            <label class="form-check-label" for="role_communication">Communication and Outreach</label>
        </div>
    </div>

    <!-- Additional Information Section -->
    <h2 class="mt-3">Additional Information</h2>

    <div class="form-group">
        <label for="additional_information">19. Any other information you would like to share:</label>
        <textarea class="form-control" id="additional_information" name="additional_information" rows="4"></textarea>
    </div>

    <!-- Declaration Section -->
    <h2 class="mt-3">Declaration</h2>

    <div class="form-group">
        <label for="declaration">20. Declaration:</label>
        <textarea class="form-control" id="declaration" name="declaration" rows="4" required></textarea>
    </div>

    <div class="form-group">
        <label for="date">21. Date:</label>
        <input type="date" class="form-control" id="date" name="date" required>
    </div>

    <!-- Submit Button -->
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>



</div>

<!-- Add your JavaScript links or scripts here -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Your custom JavaScript here
</script>

</body>
</html>
