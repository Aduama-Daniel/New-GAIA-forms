@extends('layouts.layout')

@section('title', 'Language Proficiency')

@section('content')




<body id="langBody">
   <div class="card" id="langCard">
      <div class="lang-photo-wrapp" id="photoWrap">
         <img src="{{secure_asset('/images/7.jpg')}}" class="photo" id="lang-photo"></img>
         <!--<div class="photo"></div>-->
         <div class="page">@lang('Language Proficiency')</div>
      </div>
      <div class="form-container">
      <img src="{{secure_asset('/images/logo2.png')}}" id="lang-logo" alt="GAIA logo">
      <h2>@lang('Club Registration Form')</h2>
      <form id="step1Form" action="{{ secure_url('/store/2') }}" method="post">
      <!-- <form id="step1Form" action="{{ url('/store/2') }}" method="post"> -->
      
@csrf <!-- Laravel CSRF token -->   
      <h3>@lang('Language Proficiency')</h3>
         <h4>@lang('English Proficiency')</h4>
         <div class="languages" id="english">
            <label for="engSpoken">@lang('English Speaking')</label>
               <select class="options" id="engSpoken" name="english_spoken" placeholder="@lang('Select your level of speaking')" required>
                  <option value="" disabled selected>@lang('Select your level of speaking')</option>
                  <option value="basic">@lang('Basic')</option>
                  <option value="intermediate">@lang('Intermediate')</option>
                  <option value="fluent">@lang('Fluent')</option>
               </select>

            <label for="engWriting">@lang('English Writing')</label>
               <select class="options" id="engWriting" name="english_written" placeholder="@lang('Select your level of writing')" required>
                  <option value="" disabled selected>@lang('Select your level of writing')</option>
                  <option value="basic">@lang('Basic')</option>
                  <option value="intermediate">@lang('Intermediate')</option>
                  <option value="fluent">@lang('Fluent')</option>
               </select>
         </div>

         <h4>@lang('French Proficiency')</h4>
         <div class="languages" id="french">
            <label for="freSpoken">@lang('French Speaking')</label>
               <select class="options" id="freSpoken" name="french_spoken" placeholder="@lang('Select your level of speaking')" required>
                  <option value="" disabled selected>@lang('Select your level of speaking')</option>
                  <option value="basic">@lang('Basic')</option>
                  <option value="intermediate">@lang('Intermediate')</option>
                  <option value="fluent">@lang('Fluent')</option>
               </select>

            <label for="freWriting">@lang('French Writing')</label>
               <select class="options" id="freWriting" name="french_written" placeholder="@lang('Select your level of writing')" required>
                  <option value="" disabled selected>@lang('Select your level of writing')</option>
                  <option value="basic">@lang('Basic')</option>
                  <option value="intermediate">@lang('Intermediate')</option>
                  <option value="fluent">@lang('Fluent')</option>
               </select>
         </div>

         <div class="nav">
            <button type="button"><a href="{{secure_url('/form')}}" class="page-link">@lang('Back')</a></button>   
            <!-- <button type="button"><a href="{{url('/form')}}" class="page-link">Back</a></button>    -->
           
            <button type="submit">@lang('Next')</button>
         </div>
      </form>
   </div>
</body>

   
</body>


@endsection

