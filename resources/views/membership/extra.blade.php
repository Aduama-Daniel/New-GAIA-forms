@extends('layouts.layout')

@section('title', 'Extra information')

@section('content')





<body id="extraBody">
   <div class="card" id="extraCard">
      <div class="extra-photo-wrapp" id="photoWrap">
         <img src="{{secure_asset('/images/3.jpg')}}" class="photo" id="extra-photo"></img>

         <!--<div class="photo"></div>-->
         <div class="page">Background, Interests, Skills & Contributions</div>
      </div>
      <div class="form-container">
      <img src="{{secure_asset('/images/logo2.png')}}" id="extra-logo">
      <h2>Club Registration Form</h2>
      <form id="step1Form" action="{{ secure_url('/submit') }}" method="post">
      
@csrf <!-- Laravel CSRF token -->
         <h3>Background, Interests, Skills & Contributions</h3>
         <h4>Background & Interests</h4>
         <div class="extras" id="bgAndInt">
            <label for="prevExp">Previous Experience with Digital Technologies</label>
               <select class="options" id="prevExp" name="experience_digital_technologies" placeholder="Select your level of experience with digital technologies" required>
                  <option value="" disabled selected>Select your level of experience with digital technologies</option>
                  <option value="none">None</option>
                  <option value="basic">Basic</option>
                  <option value="intermediate">Intermediate</option>
                  <option value="Advanced">Advanced</option>
               </select>

            <label for="intInEarth">Specific Interest in Earth Observation and IoT</label>
            <textarea class="extended" type="text" id="intInEarth" name="interest_earth_observation" placeholder="Describe your interest and any relevant experience or projects" required max="200" min="1"></textarea>

            <label for="reason">Why do you want to join the GAIA Club?</label>
            <textarea class="extended" type="text" id="reason" name="why_join_gaia_club" placeholder="Provide a brief statement on your motivation to join and what you hope to achieve" required max="200" min="1"></textarea>

            <label for="reason">Personal and Professional Goals</label>
            <textarea class="extended" type="text" id="reason" name="personal_and_professional_goals" placeholder="How do you envision your involvement with the GAIA Club contributing to your personal and professional goals?" required max="200" min="1"></textarea>
         </div>

      <h4>Skills & Contributions</h4>
         <div class="extras" id="skAndCon">
            <label for="techSkills">Technical Skills</label>
            <textarea class="extended" type="text" id="techSkills" name="technical_skills" placeholder="List any technical skills relevant to earth observation and IoT" required max="200" min="1"></textarea>

            <label for="nonTechSkills">Non-Technical Skills</label>
            <textarea class="extended" type="text" id="nonTechSkills" name="non_technical_skills" placeholder="Describe any other skills you bring to the team" required max="200" min="1"></textarea>
         </div>

      <h4>Group Participation</h4>
         <div class="extras" id="participation">
            <label for="role">Preferred Group Role</label>
               <select class="options" id="role" name="preferred_group_role" placeholder="Preferred group role" required>
                  <option value="" disabled selected>Preferred group role</option>
                  <option value="research">Research and Conceptualization</option>
                  <option value="techDev">Technical Development</option>
                  <option value="proMgmnt">Project Management</option>
                  <option value="comAndOut">Communication and Outreach</option>
               </select>
         </div>

      <h3>Additional Information</h3>
         <div class="extras" id="addInfo">
            <label for="reason">Any other information you would like to share</label>
            <textarea class="extended" type="text" id="reason" name="additional_information" placeholder="Provide a brief statement on your motivation to join and what you hope to achieve" required max="200" min="1"></textarea>
         </div>

         <label  id="declare"for="Declare">Declaration</label>
            <label class="container">I hereby declare that the information provided is true and accurate to the best of my knowledge. I understand that membership in the GAIA Club requires active participation and commitment
            <input type="checkbox" checked="checked" required>
            <span class="checkmark"></span>
         </label>

         <label id="date" for="currentDate">Current Date</label>
         <input type="date" id="currentDate" name="currentDate" required>

         <script>
         // JavaScript to set the current date as the default value
         document.getElementById('currentDate').valueAsDate = new Date();
         </script>

<div class="nav">

<button type="button" ><a href="{{secure_url('/language')}}" class="page-link">Back</a></button>   
           

         <button type="submit" id="contButtonLink">Submit</button>
</div>
         </a>
      </form>
   </div>
</body>
@endsection
