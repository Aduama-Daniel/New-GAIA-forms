<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
    <!-- Bootstrap CSS link (adjust the path if needed) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h1 class="mb-4">User Details</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Personal Information</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>ID:</strong> {{ $user->id }}</li>
                    <li class="list-group-item"><strong>Surname:</strong> {{ $user->surname }}</li>
                    <li class="list-group-item"><strong>Give_name:</strong> {{ $user->given_names }}</li>
                    <li class="list-group-item"><strong>Age:</strong> {{ $user->age }}</li>
                    <li class="list-group-item"><strong>Gender:</strong> {{ $user->gender }}</li>
                    <li class="list-group-item"><strong>Email:</strong> {{ $user->email }}</li>
                    <li class="list-group-item"><strong>Contact:</strong> {{ $user->phone_number }}</li>
                    <li class="list-group-item"><strong>University:</strong> {{ $user->university_name }}</li>
                    <li class="list-group-item"><strong>Faculty:</strong> {{ $user->faculty_department }}</li>
                    <li class="list-group-item"><strong>Country:</strong> {{ $user->country }}</li>
                    <!-- Example of accessing group name -->
                    
                    
                   
                    <!-- Add more personal information fields as needed -->
                </ul>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Membership Information</h5>
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>Group Name:</strong> {{ $user->group->group_name }}</li>

                    <li class="list-group-item"><strong>English Spoken:</strong> {{ $user->english_spoken }}</li>
                    <li class="list-group-item"><strong>French Spoken:</strong> {{ $user->french_spoken }}</li>
                    <li class="list-group-item"><strong>English Written:</strong> {{ $user->english_written }}</li>
                    <li class="list-group-item"><strong>Experience_digital_technologies:</strong> {{ $user->experience_digital_technologies }}</li>
                    <li class="list-group-item"><strong>Interest in Earth Observation:</strong> {{ $user->interest_earth_observation }}</li>
                    <li class="list-group-item"><strong>Personal and professional goals:</strong> {{ $user->personal_and_professional_goals }}</li>
                    <li class="list-group-item"><strong>Technical skills:</strong> {{ $user->technical_skills }}</li>
                    <li class="list-group-item"><strong>Nontechnical skills:</strong> {{ $user->non_technical_skills }}</li>
                    <li class="list-group-item"><strong>Preferred group role:</strong> {{ $user->preferred_group_role }}</li>
                    <li class="list-group-item"><strong>Aditional information:</strong> {{ $user->additional_information }}</li>
                    <!-- Add more membership information fields as needed -->
                </ul>
            </div>
        </div>

        <!-- Add more cards for other sections as needed -->

    </div>

    <!-- Bootstrap JS and Popper.js scripts (if needed) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

