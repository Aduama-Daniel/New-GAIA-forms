@extends('layouts.layout')

@section('title', 'Individual Registration')






@section('content')








<body id="indBody">
   <div class="card" id="indCard">
      <div class="ind-photo-wrapp" id="photoWrap">
         <img src="{{secure_asset('/images/2.jpg')}}" class="photo"></img>
         <!-- <img src="{{asset('/images/2.jpg')}}" class="photo"></img> -->
         <div class="page">Personal Information</div>
      </div>
      <div class="form-container">
         <img src="{{secure_asset('/images/logo2.png')}}" id="ind-logo">
         <h2>Club Registration Form</h2>
         <form id="step1Form" action="{{ secure_url('/store/1') }}" method="post">
         <!-- <form id="step1Form" action="{{ url('/store/1') }}" method="post"> -->
            @csrf
   <h3>Personal Info</h3>
            <div class="form-group">
               <label for="existing_group">Select Existing Group:</label>
               <select id="existing_group" name="group_id" class="form-control">
                  <option value="" selected disabled>Select your group</option>
                  @foreach($groups as $group)
                     <option value="{{ $group->id }}">{{ $group->group_name }}</option>
                  @endforeach
               </select>
            </div>
            <label for="surName">Surname</label>
            <input type="text" id="fullName" name="surname" placeholder="Surname" required>

            <label for="givenName">Given Names</label>
            <input type="text" id="fullName" name="given_names" placeholder="Other names" required>

            <label for="uniName">Select your University </label>
            <input type="text" id="fullName" name="university_name" placeholder="University name" required>

            <label for="faculty">Faculty/Department</label>
            <input type="text" id="faculty" name="faculty_department" placeholder="Faculty/Department" required>

            <label for="program">Degree Program</label>
            <input type="text" id="faculty" name="degree_program" placeholder="eg. BSc Physics" required>

            <div class="ageGender">
               <div class="ageWrapper">
                  <label for="age">Age</label>
                  <input type="number" id="age" name="age" placeholder="Enter your age" required min="10" max="99" required>
               </div>

               <div class="genderWrapper">
                  <label for="gender">Gender</label>
                  <select class="options" id="gender" name="gender" required>
                     <optgroup>
                        <option value="" disabled selected>Select your gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                     </optgroup>
                  </select>
               </div>
            </div>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
            

            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phone_number" placeholder="Phone number" required>

            <div class="genderWrapper">
                  <label for="country">Country</label>
                  <select class="options" id="country" name="country" required>
                     <optgroup>
                        <option value="" disabled selected>Select your Country</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Togo">Togo</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Egypt">Egypt</option>
                        <option value="Côte d’Ivoire">Côte d’Ivoire</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Senegal">Senegal</option>
                       
                     </optgroup>
                  </select>
               </div>
            

            <div class="nav">
               <button type="button"><a href="{{ secure_url('/groups/form') }}" class="page-link">Back</a></button>
               <!-- <button type="button"><a href="{{ url('/groups/form') }}" class="page-link">Back</a></button> -->
               <button type="submit">Next</button>
            </div>
         </form>
      </div>
   </div>

   
@if (session('success'))
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


   <script>
      // JavaScript to manage form navigation
      const formData = {};

function nextStep(step) {
    // Collect data from the current step and store it in formData
    formData.surname = document.getElementById('surname').value;
    formData.given_name = document.getElementById('given_name').value;
    formData.university_name = document.getElementById('university_name').value;
    // Add other fields similarly...

    // Move to the next step
    document.getElementById(`step${step}Form`).style.display = 'none';
    document.getElementById(`step${step + 1}Form`).style.display = 'block';
}

   </script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

@endsection
