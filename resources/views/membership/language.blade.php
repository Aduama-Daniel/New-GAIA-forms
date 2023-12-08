<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>GAIA Club registration</title>
   <link rel="stylesheet" href="{{ asset('/styles/nav.css') }}">
<link rel="stylesheet" href="{{ asset('/styles/main.css') }}">
<link rel="stylesheet" href="{{ asset('/styles/footer.css') }}"></head> 
<body id="langBody">
   <div class="card" id="langCard">
      <div class="lang-photo-wrapp" id="photoWrap">
         <img src="{{asset('/images/7.jpg')}}" class="photo" id="lang-photo"></img>
         <!--<div class="photo"></div>-->
         <div class="page">Language Proficiency</div>
      </div>
      <div class="form-container">
      <img src="{{asset('/images/logo2.png')}}" id="lang-logo" alt="GAIA logo">
      <h2>Club Registration Form</h2>
      <form id="step1Form" action="{{ route('membership.store', ['step' => 2]) }}" method="post">
@csrf <!-- Laravel CSRF token -->   
      <h3>Language Proficiency</h3>
         <h4>English Proficiency</h4>
         <div class="languages" id="english">
            <label for="engSpoken">English Speaking</label>
               <select class="options" id="engSpoken" name="english_spoken" placeholder="Select your level of speaking" required>
                  <option value="" disabled selected>Select your level of speaking</option>
                  <option value="basic">Basic</option>
                  <option value="intermediate">Intermediate</option>
                  <option value="fluent">Fluent</option>
               </select>

            <label for="engWriting">English Writing</label>
               <select class="options" id="engWriting" name="english_written" placeholder="Select your level of writing" required>
                  <option value="" disabled selected>Select your level of writing</option>
                  <option value="basic">Basic</option>
                  <option value="intermediate">Intermediate</option>
                  <option value="fluent">Fluent</option>
               </select>
         </div>

         <h4>French Proficiency</h4>
         <div class="languages" id="french">
            <label for="freSpoken">French Speaking</label>
               <select class="options" id="freSpoken" name="french_spoken" placeholder="Select your level of speaking" required>
                  <option value="" disabled selected>Select your level of speaking</option>
                  <option value="basic">Basic</option>
                  <option value="intermediate">Intermediate</option>
                  <option value="fluent">Fluent</option>
               </select>

            <label for="freWriting">French Writing</label>
               <select class="options" id="freWriting" name="french_written" placeholder="Select your level of writing" required>
                  <option value="" disabled selected>Select your level of writing</option>
                  <option value="basic">Basic</option>
                  <option value="intermediate">Intermediate</option>
                  <option value="fluent">Fluent</option>
               </select>
         </div>

         <div class="nav">
            <button type="button" id="backButtonLink"><a href="{{route('membership.form')}}">Back</a></button>   
           
            <button type="submit">Next</button>
         </div>
      </form>
   </div>
</body>

   
</body>
</html>