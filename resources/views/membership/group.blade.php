@extends('layouts.layout')

@section('title', 'Group Registration')

@section('content')




<body id="groupBody">



   
   <div class="card" id="groupCard">
      <div class="photo-wrapp" id="photoWrap">
         <img src="{{secure_asset('/images/1.jpg')}}" class="photo" id="group-photo"></img>
         <!-- <img src="{{asset('/images/1.jpg')}}" class="photo" id="group-photo"></img> -->

         
         

         
         <!--<div class="photo"></div>-->
         <div class="page">Group Information</div>

      

      </div>

      
      <div class="form-container">
      <br><br><br><br>
      <img src="{{ secure_asset('/images/logo2.png') }}" id="group-logo">
      <!-- <img src="{{ asset('/images/logo2.png') }}" id="group-logo"> -->


      
      <h2>Club Registration Form</h2>
      <form id="groupForm" action="{{secure_url('/groups/submit') }}" method="post">
      <!-- <form id="groupForm" action="{{url('/groups/submit') }}" method="post"> -->
      @csrf <!-- Laravel CSRF token -->

      <h3>Group Section</h3>
   
        

         

         <label for="groupName">Group Name</label>
         <input type="text" id="groupName" name="group_name" placeholder="Enter your group name" required>

         <label for="numOfMembers">Number of Group Members</label>
            <select class="options" id="numOfMembers" name="total_members" min = "3" max="6" required>
               <optgroup>
                  <option value="" disabled selected>Select Number of Members</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
               </optgroup>
            </select>

         <label for="genderInclusive">Gender Inclusive Section</label>
         <div id="genInc">
            <label class="container">Yes, our group is gender inclusive.
            <input type="checkbox" checked="checked" name = "gender_inclusivity" value="1">
            
            <span class="checkmark"></span>
            </label>
         </div>

   <div class="nav">
                     
         <button type="submit" value ="Submit" id="contButtonLink"> Register</button>
         <button type="button" ><a href="{{secure_url('/form')}}" class="page-link">Skip</a></button> 
         <!-- <button type="button" ><a href="{{url('/form')}}" class="page-link">Skip</a></button> -->
        
   </div>
   

       
            <br>
            <br>
            

         @if (session('success'))
    <div class="custom-alert success">
        {{ session('success') }}
    </div>
@endif


@if ($errors->any())
    <div class="custom-alert error">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


      </form>
      
   </div>
   </div>


   



  

   




   
</body>
@endsection
