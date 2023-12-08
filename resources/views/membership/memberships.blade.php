<!-- resources/views/membership/form.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAIA Club Membership Form</title>
    <!-- Add your CSS links or styles here -->
</head>
<body>

<form action="{{ route('membership.submit') }}" method="post">
    @csrf <!-- Laravel CSRF token -->

    <h2>Group Information</h2>
    <label for="group_name">Group Name:</label>
    <input type="text" id="group_name" name="group_name" required>

    <label for="total_members">Total Number of Group Members:</label>
    <input type="number" id="total_members" name="total_members" min="3" max="6" required>

    <label for="gender_inclusivity">Gender Inclusivity Confirmation:</label>
    <input type="checkbox" id="gender_inclusivity" name="gender_inclusivity" value="1">
    <label for="gender_inclusivity">Yes, our group is gender inclusive.</label>

    <!-- Individual Member Information Section -->
    <h2>Individual Member Information</h2>
    <!-- Repeat the following block for each member -->
    <label for="surname">Surname:</label>
    <input type="text" id="surname" name="surname" required>

    <label for="given_names">Given Name(s):</label>
    <input type="text" id="given_names" name="given_names" required>

    <!-- ... Repeat for other member details ... -->

    <!-- Language Proficiency Section -->
    <h2>Language Proficiency</h2>
    <label>English Proficiency:</label>
    <div>
        <label>Spoken:</label>
        <input type="checkbox" name="english_proficiency[]" value="Basic"> Basic
        <input type="checkbox" name="english_proficiency[]" value="Intermediate"> Intermediate
        <input type="checkbox" name="english_proficiency[]" value="Fluent"> Fluent
    </div>
    <div>
        <label>Written:</label>
        <input type="checkbox" name="english_written[]" value="Basic"> Basic
        <input type="checkbox" name="english_written[]" value="Intermediate"> Intermediate
        <input type="checkbox" name="english_written[]" value="Fluent"> Fluent
    </div>

    <!-- ... Repeat for French Proficiency and other sections ... -->

    <!-- Background and Interests Section -->
    <h2>Background and Interests</h2>
    <label for="experience_digital_technologies">Previous Experience with Digital Technologies:</label>
    <select id="experience_digital_technologies" name="experience_digital_technologies">
        <option value="None">None</option>
        <option value="Basic">Basic</option>
        <option value="Intermediate">Intermediate</option>
        <option value="Advanced">Advanced</option>
    </select>

    <label for="interest_earth_observation">Specific Interest in Earth Observation and IoT:</label>
    <textarea id="interest_earth_observation" name="interest_earth_observation" rows="4"></textarea>

    <!-- ... Repeat for other sections ... -->

    <!-- Declaration Section -->
    <h2>Declaration</h2>
    <label for="declaration">Declaration:</label>
    <textarea id="declaration" name="declaration" rows="4" required></textarea>

    <label for="date">Date:</label>
    <input type="date" id="date" name="date" required>

    <!-- Submit Button -->
    <input type="submit" value="Submit">
</form>

<!-- Add your JavaScript links or scripts here -->

</body>
</html>
