<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Registration</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* Your custom styles here */
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
        }
    </style>
</head>
<body>



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif





<div class="container">
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <h2>Group Registration</h2>

    <!-- Add this div inside your form, where you want to display the message -->
<div id="errorMessage" class="alert alert-danger" style="display: none;"></div>


    
    <form id="groupRegistrationForm" action="{{ route('groups.create') }}" method="post">

    @csrf <!-- Laravel CSRF token -->


        <div class="form-group">
            <label for="group_membership">Are you already part of a group?</label>
            <select class="form-control" id="group_membership" name="group_membership">
                <option value="new">No, I want to create a new group</option>
                <option value="existing">Yes, I am part of an existing group</option>
            </select>
        </div>

        <div id="newGroupFields">
            <!-- Fields for new group registration -->
            <div class="form-group">
                <label for="group_name">Group Name:</label>
                <input type="text" class="form-control" id="group_name" name="group_name">
            </div>

            <div class="form-group">
                <label for="total_members">Total Number of Group Members:</label>
                <input type="number" class="form-control" id="total_members" name="total_members" min="3" max="6">
            </div>

            <div class="form-group">
                <label for="gender_inclusivity">Gender Inclusivity Confirmation:</label>
                <input type="checkbox" id="gender_inclusivity" name="gender_inclusivity" value="1">
                <label for="gender_inclusivity">Yes, our group is gender inclusive.</label>
            </div>
        </div>

        <!-- Add other fields as needed -->

        <button type="submit" value = "Submit" class="btn btn-primary">Submit</button>

    </form>
</div>






<!-- jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Add this div inside your form, where you want to display the message -->
<div id="errorMessage" class="alert alert-danger" style="display: none;"></div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('group_membership').addEventListener('change', function () {
            var newGroupFields = document.getElementById('newGroupFields');
            newGroupFields.style.display = this.value === 'new' ? 'block' : 'none';
        });

        document.getElementById('groupRegistrationForm').addEventListener('submit', function (event) {
            var groupNameInput = document.getElementById('group_name');
            var totalMembersInput = document.getElementById('total_members');
            var errorMessageDiv = document.getElementById('errorMessage');

            // Check if the user has chosen to create a group
            if (document.getElementById('group_membership').value === 'new') {
                // Check if the group creation fields are filled
                if (groupNameInput.value === '' || totalMembersInput.value === '') {
                    errorMessageDiv.innerText = 'Please fill all the group creation fields.';
                    errorMessageDiv.style.display = 'block';
                    event.preventDefault();
                } else {
                    // If there are no errors, hide the error message
                    errorMessageDiv.style.display = 'none';
                }
            }
        });
    });
</script>





</body>
</html>
