@extends('layouts.layout')

@section('title', 'Individual Registration')






@section('content')








<body id="indBody">
   <div class="card" id="indCard">
      <div class="ind-photo-wrapp" id="photoWrap">
         <img src="{{secure_asset('/images/2.jpg')}}" class="photo"></img>
         <!-- <img src="{{asset('/images/2.jpg')}}" class="photo"></img> -->
         <div class="page">@lang('Personal Information')</div>
      </div>
      <div class="form-container">
         <img src="{{secure_asset('/images/logo2.png')}}" id="ind-logo">
         <h2>@lang('Club Registration Form')</h2>
         <form id="step1Form" action="{{ secure_url('/store/1') }}" method="post">
         <!-- <form id="step1Form" action="{{ url('/store/1') }}" method="post"> -->
         
            @csrf
   <h3>@lang('Personal Information')</h3>
            <div class="form-group">
               <label for="existing_group">@lang('Select Existing Group'):</label>
               <select id="existing_group" name="group_id" class="form-control">
                  <option value="" selected disabled>@lang('Select your group')</option>
                  @foreach($groups as $group)
                     <option value="{{ $group->id }}">{{ $group->group_name }}</option>
                  @endforeach
               </select>
            </div>
            <label for="surName">@lang('Surname')</label>
            <input type="text" id="fullName" name="surname" placeholder="@lang('Surname')" required>

            <label for="givenName">@lang('Given Names')</label>
            <input type="text" id="fullName" name="given_names" placeholder="@lang('Given Names')" required>

            <label for="uniName">@lang('Select your University') </label>
            <input type="text" id="fullName" name="university_name" placeholder="@lang('University name')" required>

            <label for="faculty">@lang('Faculty/Department')</label>
            <input type="text" id="faculty" name="faculty_department" placeholder="@lang('Faculty/Department')" required>

            <label for="program">@lang('Degree Program')</label>
            <input type="text" id="faculty" name="degree_program" placeholder="eg. BSc Physics" required>

            <div class="ageGender">
               <div class="ageWrapper">
                  <label for="age">@lang('Age')</label>
                  <input type="number" id="age" name="age" placeholder="@lang('Enter your age')" required min="10" max="99" required>
               </div>

               <div class="genderWrapper">
                  <label for="gender">@lang('Gender')</label>
                  <select class="options" id="gender" name="gender" required>
                     <optgroup>
                        <option value="" disabled selected>@lang('Select your gender')</option>
                        <option value="male">@lang('Male')</option>
                        <option value="female">@lang('Female')</option>
                        
                     </optgroup>
                  </select>
               </div>
            </div>

            <label for="email">@lang('Email'):</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
            

            <label for="phoneNumber">@lang('Phone Number')</label>
            <input type="tel" id="phoneNumber" name="phone_number" placeholder="@lang('Phone Number')" required>

            <div class="genderWrapper">
                  <label for="country">@lang('Country')</label>
                  <select class="options" id="country" name="country" required>
                     <optgroup>
                        <option value="" disabled selected>@lang('Select your Country')</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Angola">Angola</option>
                        <option value="Benin">Benin</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cabo Verde">Cabo Verde</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Egypt">Egypt</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Eswatini">Eswatini</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Ivory Coast">Ivory Coast</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Mali">Mali</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Sudan">South Sudan</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Togo">Togo</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>

                       
                     </optgroup>
                  </select>
               </div>
            

            <div class="nav">
               <button type="button"><a href="{{ secure_url('/groups/form') }}" class="page-link">Back</a></button>
               <!-- <button type="button"><a href="{{ url('/groups/form') }}" class="page-link">@lang('Back')</a></button> -->
               <button type="submit">@lang('Next')</button>
            </div>
         </form>
      </div>
   </div>

   



   <!-- <script>
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

   </script> -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

@endsection
