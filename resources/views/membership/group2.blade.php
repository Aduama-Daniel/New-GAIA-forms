@extends('layouts.layout')

@section('title', 'Group Registration')

@section('head')
    <!-- Include stylesheets, meta tags, etc. -->
    <link rel="stylesheet" href="{{ secure_asset('/styles/form.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('/styles/main.css') }}">



    <!-- <style>
      .custom-alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}

.success {
    color: #3c763d;
    background-color: #dff0d8;
    border-color: #d6e9c6;
}

.error {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
}

    </style> -->

    
   <style>
    #form-headers{
        position: relative;
        display: flex;
        flex-direction: row;
        justify-content: space-between; /* Align to the right */
        align-items: center;
        max-height: 120px;
        margin-bottom: 60px;
        margin-top: 20px; 
    }

    .language-switcher {
        margin: 0;
        padding: 0;
        transform: translateY(50%);
    }

    #group-logo{
    }

    label {
        margin-right: 10px;
    }

    select {
        width: 60px; /* Adjust the width as needed */
    }
</style>

   

@endsection

@section('content')







<body id="groupBody">










   
      <div class="card" id="groupCard">
         

               <div class="photo-wrapp" id="photoWrap">
                     <img src="{{secure_asset('/images/1.jpg')}}" class="photo" id="group-photo"></img>
                     <!-- <img src="{{asset('/images/1.jpg')}}" class="photo" id="group-photo"></img> -->

                     

                     
                     

                     
                     <!--<div class="photo"></div>-->
                     <div class="page">@lang('Group Information')</div>

               

               </div>

               
               

               
               <div class="form-container">
                                
                     <br><br><br><br>

                    <div id="form-headers">
                
                     <img src="{{ secure_asset('/images/logo2.png') }}" id="group-logo">
                     <!-- <img src="{{ asset('/images/logo2.png') }}" id="group-logo"> -->

                     <div class="language-switcher">
    <select id="lang" name="lang" onchange="changeLanguage()">
        <option value="{{ secure_url('locale/en') }}" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>En</option>
        <option value="{{ secure_url('locale/fr') }}" {{ app()->getLocale() == 'fr' ? 'selected' : '' }}>Fr</option>
    </select>
    </div>
                    </div>
                     


                     
                     <h2>@lang('Club Registration Form')</h2>

<form id="groupForm" action="{{ secure_url('/groups/submit') }}" method="post">
<!-- <form id="groupForm" action="{{ url('/groups/submit') }}" method="post"> -->
    @csrf <!-- Laravel CSRF token -->

    <h3>@lang('Group Section')</h3>

    <p><a id="policy-button" role="button" tabindex="0" onclick="openPolicyPopup()">
        @lang('Kindly read our Policy & Guidelines before you proceed..')</a></p>

    <label for="groupName">@lang('Group Name')</label>
    <input type="text" id="groupName" name="group_name" placeholder="@lang('Enter your group name')" required>

    <label for="numOfMembers">@lang('Number of Group Members')</label>
    <select class="options" id="numOfMembers" name="total_members" min="3" max="6" required>
        <optgroup>
            <option value="" disabled selected>@lang('Select Number of Members')</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </optgroup>
    </select>

    <label for="genderInclusive">@lang('Gender Inclusive Section')</label>
    <div id="genInc">
        <label class="container">@lang('Yes, our group is gender inclusive.')
            <input type="checkbox" checked="checked" name="gender_inclusivity" value="1">
            <span class="checkmark"></span>
        </label>
    </div>

    <div class="nav">
        <button type="submit" value="Submit" id="contButtonLink">@lang('Register')</button>
        <button type="button"><a href="{{ secure_url('/form') }}" class="page-link">@lang('Skip')</a></button>
        <!-- <button type="button"><a href="{{ url('/form') }}" class="page-link">@lang('Skip')</a></button> -->
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

      <div id="policy-overlay" onclick="closePolicyPopup()">
        <!-- Policy pop-up content -->
        <div id="policy-popup">
            <span id="close-button" onclick="closePolicyPopup()">&times;</span>
            <img src="{{ secure_asset('images/logo2.png') }}" id="policy-logo" alt="GAIA logo">

            <h2>@lang('A. GEO-Africa Incubator/Accelerator (GAIA) Club Policy')</h2>
<h3>@lang('Preamble')</h3>
<p>@lang('The GAIA Clubs established within universities across serve as a dynamic platform for nurturing the potential of young minds in the realms of digital technology, specifically focusing on the pivotal areas of earth observation (EO) and the Internet of Things (IoT).')</p>
<p>@lang('The GAIA Club initiative, rooted in the ethos of “Empowering African Youth through Digital Stewardship for Earth Observation-Driven Sustainability,” aims to bridge the gap between theoretical knowledge and practical application. It is our belief that by providing a structured, supportive, and inclusive environment, we can ignite a passion for technological innovation and environmental responsibility among students.')</p>
<p>@lang('This policy outlines the framework for membership, group formation, training, and development activities within the GAIA Clubs. Through this policy, we strive to create a landscape of opportunity where young, aspiring technologists can grow, collaborate, and contribute to sustainable development and environmental conservation.')</p>

<h3>@lang('Policy Guidelines')</h3>
<p>@lang('1. Establishment of GAIA Clubs: GAIA Clubs shall be established in a university to foster a collaborative environment for students passionate about digital technology, with a focus on earth observation and the Internet of Things.')</p>
<p>@lang('2. Membership Criteria: Membership in GAIA Clubs is open to all students enrolled at the club\'s host institution who have a keen interest in the specified fields of technology.')</p>
<p>@lang('3. Application Process: Interested students must complete an application form to join the GAIA Club, demonstrating their commitment and interest in the club\'s objectives.')</p>
<p>@lang('4. Group Formation: Members will form groups comprising a minimum of three and a maximum of six individuals. It is imperative that these groups maintain gender inclusivity, promoting a balanced and diverse perspective in their activities.')</p>
<p>@lang('5. Orientation and Training: Edenway Foundation will conduct orientation sessions for new members and groups, providing essential insights and guidelines for effective participation in club activities.')</p>
<p>@lang('6. Topic Selection and Pitch Preparation: After the orientation, groups will select specific topics to focus their efforts on. Each group is required to prepare a pitch related to their chosen topic. The top five groups from the various clubs will then be shortlisted.')</p>
<p>@lang('7. Prototype Development Support: Edenway Foundation will support the five shortlisted groups in developing their prototypes. This support will be both hardware and advisory in nature. In special circumstances, the support will be financial.')</p>
<p>@lang('8. Online Training and Webinars: To aid in the development of prototypes, Edenway Foundation will facilitate a series of online training sessions and webinars, covering relevant topics and skills. Where possible, experts will visit clubs and provide in-person support.')</p>
<p>@lang('9. Mini-GAIAthon Competition: Each GAIA Club will organize a mini-GAIAthon, where groups will present their solution pitches. The top two groups from each club will be chosen to participate in the main GAIAthon event.')</p>
<p>@lang('10. Annual Calendar and Key Timelines:')</p>
<ul>
    <li>@lang('a) October-December: Membership application period.')</li>
    <li>@lang('b) January-February: Orientation, group formation, topic selection, announcement of shortlisted groups, and distribution of hardware and accessories.')</li>
    <li>@lang('c) March-May: Series of webinars and active development phase of solutions.')</li>
    <li>@lang('d) June: Submission of pitch decks and announcement of top two groups for GAIAthon.')</li>
    <li>@lang('e) July-August: Preparation phase for the GAIAthon.')</li>
    <li>@lang('f) 2-5 September: Hosting of the GAIAthon.')</li>
    <li>@lang('g) 6 September: Celebration of GAIAfest.')</li>
</ul>

        
<h2>@lang('B. Earth Observation & Internet of Things Topics')</h2>
<h3>@lang('Approach')</h3>
<p>@lang('Groups are encouraged to make use of free and readily available optical or radar satellite data, drone imagery, and in-situ datasets. Groups are also encouraged to utilize free and open-source software, IoT developer kits, sensors, and any other devices that they may deem relevant. Projects must showcase originality or significant improvements made to similar or existing innovations. Projects must also display a business potential or a need to an identified market. Innovations may address the issues listed below or any other relevant issue related to earth observation.')</p>

<h4>@lang('1) Big Data in Earth Observation')</h4>
<ul>
    <li>@lang('a) Utilizing high-resolution satellite images for environmental monitoring, land-use change detection, and disaster response.')</li>
    <li>@lang('b) Leveraging big data for advanced climate modeling to predict weather patterns, climate change effects, and environmental shifts.')</li>
    <li>@lang('c) Combining data from multiple sources, including satellites, drones, and ground sensors, to enhance the accuracy and depth of Earth observation data.')</li>
    <li>@lang('d) Implementing systems for the real-time processing and analysis of large datasets from Earth observation satellites.')</li>
    <li>@lang('e) Employing machine learning algorithms to analyze vast datasets for pattern recognition, anomaly detection, and predictive analytics in environmental monitoring.')</li>
    <li>@lang('f) Using satellite data for crop yield prediction, soil health monitoring, and precision agriculture practices.')</li>
    <li>@lang('g) Analyzing urban sprawl, infrastructure development, and land-use changes using large-scale earth observation data.')</li>
    <li>@lang('h) Integrating big data from various earth observation platforms for efficient disaster management and response strategies, including flood mapping, wildfire tracking, and hurricane monitoring.')</li>
    <li>@lang('i) Utilizing time-series analysis of satellite data to track and study environmental changes, including deforestation, desertification, and glacial retreat.')</li>
    <li>@lang('j) Developing platforms for efficient sharing, accessibility, and collaboration on earth observation datasets among researchers, policymakers, and the public.')</li>
</ul>

<h4>@lang('2) Biodiversity and Conservation')</h4>
<ul>
    <li>@lang('a) Implementing satellite and drone technology to monitor the habitats and movements of endangered species.')</li>
    <li>@lang('b) Utilizing GIS and remote sensing for mapping and assessing biodiversity in various ecosystems.')</li>
    <li>@lang('c) Employing technology for early detection and control of invasive species.')</li>
    <li>@lang('d) Fish/Shell-fish identification.')</li>
    <li>@lang('e) Algae (micro and macro) identification')</li>
    <li>@lang('f) Avifauna diversity and abundance assessment')</li>
</ul>

<h4>@lang('3) In-situ Environmental Measurements')</h4>
<ul>
    <li>@lang('a) Implementing sensors for real-time monitoring of water quality parameters in rivers, lakes, and coastal areas.')</li>
    <li>@lang('b) Using in-situ sensors for assessing soil quality and composition, crucial for ecological studies.')</li>
    <li>@lang('c) Gathering data on atmospheric conditions to study their impact on local environments.')</li>
</ul>

<h4>@lang('4) Marine Pollution Monitoring')</h4>
<ul>
    <li>@lang('a) Utilizing satellite imagery and in-situ sensors for the early detection and analysis of oil spills.')</li>
    <li>@lang('b) Implementing technologies for tracking and mapping the spread of plastics and other debris in marine environments.')</li>
    <li>@lang('c) Monitoring the levels of harmful chemical pollutants in marine ecosystems.')</li>
</ul>

<h4>@lang('5) Aquaculture Development')</h4>
<ul>
    <li>@lang('a) Developing systems for early detection and management of diseases in aquaculture environments.')</li>
    <li>@lang('b) Utilizing technology for monitoring and optimizing feed usage in aquaculture to ensure sustainable practices.')</li>
    <li>@lang('c) Video monitoring of fish activity/health')</li>
    <li>@lang('d) Automatic fish feeders')</li>
</ul>

<h4>@lang('6) Fisheries Management and Small Vessel Monitoring')</h4>
<ul>
    <li>@lang('a) Implementing electronic reporting systems for catch data to ensure sustainable fishing practices.')</li>
    <li>@lang('b) Assessing the impact of fishing activities on marine habitats and ecosystems.')</li>
    <li>@lang('c) Utilizing satellite and aerial surveillance to detect Illegal, Unreported, and Unregulated (IUU) fishing activities.')</li>
</ul>

<h4>@lang('7) Safe Inland Water Transport and Navigation')</h4>
<ul>
    <li>@lang('a) Implementing advanced technologies for collision avoidance in busy inland waterways.')</li>
    <li>@lang('b) Developing and deploying automated navigation aids to assist in safe and efficient inland water transport.')</li>
    <li>@lang('c) Establishing robust emergency response systems for accidents and natural disasters in inland waterways.')</li>
</ul>

<h4>@lang('8) Coastal Vegetation and Biodiversity Assessment')</h4>
<ul>
    <li>@lang('a) Using remote sensing to analyze and mitigate habitat fragmentation in coastal regions.')</li>
    <li>@lang('b) Conducting studies on the impact of climate change on coastal vegetation and biodiversity.')</li>
    <li>@lang('c) Developing strategies for the restoration and conservation of coastal habitats.')</li>
</ul>

<h4>@lang('9) Safety At Sea')</h4>
<ul>
    <li>@lang('a) Implementing advanced systems for accurate and timely weather forecasting to ensure safety at sea.')</li>
    <li>@lang('b) Enhancing emergency beacon technology for quick response in case of maritime accidents.')</li>
    <li>@lang('c) Utilizing AIS (Automatic Identification System) and other technologies for the tracking and monitoring of vessels to enhance maritime safety.')</li>
</ul>

<h4>@lang('10) Coastal Vulnerability Assessment')</h4>
<ul>
    <li>@lang('a) Utilizing satellite data and IoT sensor to track changes in sea levels over time.')</li>
    <li>@lang('b) Implementing GIS and remote sensing technologies to monitor and predict coastal erosion patterns.')</li>
    <li>@lang('c) Developing models to predict the impact of storm surges, especially in the context of increasingly severe weather events due to climate change.')</li>
    <li>@lang('d) Creating detailed flood risk maps to identify vulnerable areas prone to coastal flooding.')</li>
    <li>@lang('e) Assessing the vulnerability and resilience of coastal infrastructure, including seawalls, breakwaters, and jetties.')</li>
    <li>@lang('f) Projecting future climate change impacts on coastal areas using climate models.')</li>
    <li>@lang('g) Mapping and monitoring critical coastal habitats like coral reefs, seagrass beds, and wetlands, which play a key role in coastal protection.')</li>
    <li>@lang('h) Conducting surveys to assess the socio-economic vulnerability of coastal communities to environmental changes.')</li>
    <li>@lang('i) Mobile apps that contribute to awareness creation about coastal vulnerability and promote community engagement in mitigation and adaptation strategies.')</li>
</ul>

<h3>@lang('Instructions')</h3>
<h4>@lang('Join a Group')</h4>
<p>@lang('Membership in the GAIA Club is contingent upon being part of a collaborative group. Each applicant must be a member of a group, with each group consisting of 3 to 6 individuals. These groups must adhere to the principle of gender inclusivity.')</p>
<h4>@lang('Completing the application form')</h4>
<li>@lang('Every prospective member must individually complete the GAIA Club Membership Application Form.')</li>

<li>@lang('One member of each group should register the group.')</li>
<li>@lang('One member of each group should register the group.')</li>
<li>@lang('Other members of an already registered group should skip the group registration process and move on to select the name of their group in the personal data forms.')</li>
<li>@lang('In the group registration window, the number of members of each group is selected and the group will not appear for selection once it is full.')</li>
<li>@lang('Different groups are not allowed to have the same group name. A new name will have to be registered if the previous name has already been registered.')</li>
<li>@lang('Ensure all sections of the form are filled out accurately and thoroughly.')</li>
<li>@lang('Adherence to these guidelines is essential for your application to be considered for membership in the GAIA Club.')</li>
<li>@lang('Application deadline: 31 December 2023')</li>

       
        <button id="closeButt" onclick="closePolicyGroup()">Done</button>
    </div>

               <!-- More of your page content -->
               <!-- JavaScript to control pop-up visibility -->
<script>
    function openPolicyPopup() {
        document.getElementById('groupCard').style.display = 'none';
        document.getElementById('policy-overlay').style.display = 'flex';
    }

    function closePolicyPopup() {
        document.getElementById('policy-overlay').style.display = 'none';
        document.getElementById('groupCard').style.display = 'flex';
    }

   function changeLanguage() {
    var lang = document.getElementById("lang").value;
    window.location.href = lang;
}

</script>

            

               
                     <br>
                     <br>
                     

                             


            
               
            
           


            



         

            




            
</body>
@endsection
