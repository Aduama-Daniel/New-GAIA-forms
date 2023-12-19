@extends('layouts.layout')

@section('title', 'Group Registration')

@section('head')
    <!-- Include stylesheets, meta tags, etc. -->
    <link rel="stylesheet" href="{{ secure_asset('/styles/form.css') }}">

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
@endsection

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

                     <p> <a id="policy-button" role="button" tabindex="0" onclick="openPolicyPopup()">Kindly read our Policy & Guidelines before you proceed..</a>  </p>


                  
                     

                        

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

      <div id="policy-overlay" onclick="closePolicyPopup()">
        <!-- Policy pop-up content -->
        <div id="policy-popup">
            <span id="close-button" onclick="closePolicyPopup()">&times;</span>
            <img src="{{ secure_asset('images/logo2.png') }}" id="policy-logo" alt="GAIA logo">

        <h2>A.	GEO-Africa Incubator/Accelerator (GAIA) Club Policy</h2>
        <h3>Preamble</h3>
        The GAIA Clubs established within universities across serve as a dynamic platform for nurturing the potential of young minds in the realms of digital technology, specifically focusing on the pivotal areas of earth observation (EO) and the Internet of Things (IoT).
        The GAIA Club initiative, rooted in the ethos of “Empowering African Youth through Digital Stewardship for Earth Observation-Driven Sustainability,” aims to bridge the gap between theoretical knowledge and practical application. It is our belief that by providing a structured, supportive, and inclusive environment, we can ignite a passion for technological innovation and environmental responsibility among students.
        This policy outlines the framework for membership, group formation, training, and development activities within the GAIA Clubs. Through this policy, we strive to create a landscape of opportunity where young, aspiring technologists can grow, collaborate, and contribute to sustainable development and environmental conservation.

        <h3>Policy Guidelines</h3>
        <p>1.	Establishment of GAIA Clubs: GAIA Clubs shall be established in a university to foster a collaborative environment for students passionate about digital technology, with a focus on earth observation and the Internet of Things.</p>
        <p>2.	Membership Criteria: Membership in GAIA Clubs is open to all students enrolled at the club's host institution who have a keen interest in the specified fields of technology.</p>
        <p>3.	Application Process: Interested students must complete an application form to join the GAIA Club, demonstrating their commitment and interest in the club's objectives.</p>
        <p>4.	Group Formation: Members will form groups comprising a minimum of three and a maximum of six individuals. It is imperative that these groups maintain gender inclusivity, promoting a balanced and diverse perspective in their activities.</p>
        <p>5.	Orientation and Training: Edenway Foundation will conduct orientation sessions for new members and groups, providing essential insights and guidelines for effective participation in club activities.</p>
        <p>6.	Topic Selection and Pitch Preparation: After the orientation, groups will select specific topics to focus their efforts on. Each group is required to prepare a pitch related to their chosen topic. The top five groups from the various clubs will then be shortlisted.</p>
        <p>7.	Prototype Development Support: Edenway Foundation will support the five shortlisted groups in developing their prototypes. This support will be both hardware and advisory in nature. In special circumstances, the support will be financial.</p>
        <p>8.	Online Training and Webinars: To aid in the development of prototypes, Edenway Foundation will facilitate a series of online training sessions and webinars, covering relevant topics and skills. Where possible, experts will visit clubs and provide in-person support.</p>
        <p>9.	Mini-GAIAthon Competition: Each GAIA Club will organize a mini-GAIAthon, where groups will present their solution pitches. The top two groups from each club will be chosen to participate in the main GAIAthon event.
        10.	Annual Calendar and Key Timelines:
        <li> a)	October-December: Membership application period.</li>
        <li>b)	January-February: Orientation, group formation, topic selection, announcement of shortlisted groups, and distribution of hardware and accessories.</li>
        <li> c)	March-May: Series of webinars and active development phase of solutions.</li>
        <li> d)	June: Submission of pitch decks and announcement of top two groups for GAIAthon.</li>
        <li> e)	July-August: Preparation phase for the GAIAthon.</li>
        <li> f)	2-5 September: Hosting of the GAIAthon.</li>
        <li> g)	6 September: Celebration of GAIAfest.</p></li>
        
        <h2>B.	Earth Observation & Internet of Things Topics</h2>
        <h3>Approach</h3>
        <p>Groups are encouraged to make use of free and readily available optical or radar satellite data, drone imagery and in-situ datasets. Groups are also encouraged to utilize free and open-source software, IoT developer kits, sensors, and any other devices that they may deem relevant.
        Projects must showcase originality or significant improvements made to similar or existing innovations. Projects must also display a business potential or a need to an identified market.
        Innovations may address the issues listed below or any other relevant issue related to earth observation.</p>
        

        <h4> 1)	Big Data in Earth Observation</h4>
        <li> a)	Utilizing high-resolution satellite images for environmental monitoring, land-use change detection, and disaster response.</li>
        <li> b)	Leveraging big data for advanced climate modeling to predict weather patterns, climate change effects, and environmental shifts.</li>
        <li> c)	Combining data from multiple sources, including satellites, drones, and ground sensors, to enhance the accuracy and depth of Earth observation data.</li>
        <li> d)	Implementing systems for the real-time processing and analysis of large datasets from Earth observation satellites.</li>
        <li> e)	Employing machine learning algorithms to analyze vast datasets for pattern recognition, anomaly detection, and predictive analytics in environmental monitoring.</li>
        <li> f)	Using satellite data for crop yield prediction, soil health monitoring, and precision agriculture practices.</li>
        <li> g)	Analyzing urban sprawl, infrastructure development, and land-use changes using large-scale earth observation data.</li>
        <li> h)	Integrating big data from various earth observation platforms for efficient disaster management and response strategies, including flood mapping, wildfire tracking, and hurricane monitoring.</li>
        <li> i)	Utilizing time-series analysis of satellite data to track and study environmental changes, including deforestation, desertification, and glacial retreat.</li>
        <li> j)	Developing platforms for efficient sharing, accessibility, and collaboration on earth observation datasets among researchers, policymakers, and the public.</li>



        
        <h4> 2)	Biodiversity and Conservation </h4>
        <li> a)	Implementing satellite and drone technology to monitor the habitats and movements of endangered species.</li> 
        <li> b)	Utilizing GIS and remote sensing for mapping and assessing biodiversity in various ecosystems.</li> 
        <li> c)	Employing technology for early detection and control of invasive species.</li> 
        <li> d)	Fish/Shell-fish identification. </li> 
        <li> e)	Algae (micro and macro) identification</li> 
        <li> f)	Avifauna diversity and abundance assessment</li> 

        <h4> 3)	In-situ Environmental Measurements</h4>
        <li> a)	Implementing sensors for real-time monitoring of water quality parameters in rivers, lakes, and coastal areas.</li> 
        <li> b)	Using in-situ sensors for assessing soil quality and composition, crucial for ecological studies.</li> 
        <li> c)	Gathering data on atmospheric conditions to study their impact on local environments.</li>

        <h4>4) Marine Pollution Monitoring</h4>
        <li> a)	Utilizing satellite imagery and in-situ sensors for the early detection and analysis of oil spills.</li> 
        <li> b)	Implementing technologies for tracking and mapping the spread of plastics and other debris in marine environments.</li> 
        <li> c)	Monitoring the levels of harmful chemical pollutants in marine ecosystems.</li> 

        <h4> 5)	Aquaculture Development</h4>
        <li> a)	Developing systems for early detection and management of diseases in aquaculture environments.</li> 
        <li> b)	Utilizing technology for monitoring and optimizing feed usage in aquaculture to ensure sustainable practices.</li>
        <li> c)	Video monitoring of fish activity/health</li> 
        <li> d)	Automatic fish feeders</li>
        
        <h4> 6)	Fisheries Management and Small Vessel Monitoring</h4>
        <li> a)	Implementing electronic reporting systems for catch data to ensure sustainable fishing practices.</li> 
        <li> b)	Assessing the impact of fishing activities on marine habitats and ecosystems.</li> 
        <li> c)	Utilizing satellite and aerial surveillance to detect Illegal, Unreported, and Unregulated (IUU) fishing activities.</li> 

        <h4> 7)	Safe Inland Water Transport and Navigation</h4>
        <li> a)	Implementing advanced technologies for collision avoidance in busy inland waterways.</li> 
        <li> b)	Developing and deploying automated navigation aids to assist in safe and efficient inland water transport.</li>
        <li> c)	Establishing robust emergency response systems for accidents and natural disasters in inland waterways.</li>

        <h4> 8)	Coastal Vegetation and Biodiversity Assessment</h4>
        <li> a)	Using remote sensing to analyze and mitigate habitat fragmentation in coastal regions.</li>
        <li> b)	Conducting studies on the impact of climate change on coastal vegetation and biodiversity.</li> 
        <li> c)	Developing strategies for the restoration and conservation of coastal habitats.</li> 

        <h4> 9)	Safety At Sea</h4>
        <li> a)	Implementing advanced systems for accurate and timely weather forecasting to ensure safety at sea.</li> 
        <li> b)	Enhancing emergency beacon technology for quick response in case of maritime accidents.</li> 
        <li> c)	Utilizing AIS (Automatic Identification System) and other technologies for the tracking and monitoring of vessels to enhance maritime safety.</li>
        
        <h4> 10)	Coastal Vulnerability Assessment</h4>
        <li> a)	Utilizing satellite data and IoT sensor to track changes in sea levels over time.</li> 
        <li> b)	Implementing GIS and remote sensing technologies to monitor and predict coastal erosion patterns.</li> 
        <li> c)	Developing models to predict the impact of storm surges, especially in the context of increasingly severe weather events due to climate change.</li> 
        <li> d)	Creating detailed flood risk maps to identify vulnerable areas prone to coastal flooding.</li> 
        <li> e)	Assessing the vulnerability and resilience of coastal infrastructure, including seawalls, breakwaters, and jetties.</li> 
        <li> f)	Projecting future climate change impacts on coastal areas using climate models.</li> 
        <li> g)	Mapping and monitoring critical coastal habitats like coral reefs, seagrass beds, and wetlands, which play a key role in coastal protection.</li>
        <li> h)	Conducting surveys to assess the socio-economic vulnerability of coastal communities to environmental changes.</li> 
        <li>i)	Mobile apps that contribute to awareness creation about coastal vulnerability and promote community engagement in mitigation and adaptation strategies.</li>

        <h3>Instructions</h3>
        <h4>Join a Group</h4>
        <p>Membership in the GAIA Club is contingent upon being part of a collaborative group. Each applicant must be a member of a group, with each group consisting of 3 to 6 individuals. These groups must adhere to the principle of gender inclusivity.</p>
       <h4>Completing the application form</h4>
       <li>Every prospective member must individually complete the GAIA Club Membership Application Form.</li>

        <li> One member of each group should register the group.</li>
        <li> One member of each group should register the group.</li>
        <li> Other members of an already registered group should skip the group registeration process and move on to select the name of their group in the personal data forms.</li>
        <li> In the group registration window, the number of members of each group is selected and the group will not appear for selection once it is full.</li>
        <li> Different groups are not allowed to have the same group name. A new name will have to be registered if the previous name has already been registered.</li>
        <li>Ensure all sections of the form are filled out accurately and thoroughly.</li>
        <li>Adherence to these guidelines is essential for your application to be considered for membership in the GAIA Club.</li>
        <li>Application deadline:  31 December 2023</li>
       
        <button id="closeButt" onclick="closePolicyGroup()">Done</button>
    </div>

               <!-- More of your page content -->
               <!-- JavaScript to control pop-up visibility -->
               <script>
                  function openPolicyPopup() {
                        document.getElementById('groupCard').style.display='none';
                        document.getElementById('policy-overlay').style.display = 'flex';
                  }

                  function closePolicyPopup() {
                        document.getElementById('policy-overlay').style.display = 'none';
                        document.getElementById('groupCard').style.display='flex';
                  }
               </script>

            

               
                     <br>
                     <br>
                     

                             


            
               
            
           


            



         

            




            
</body>
@endsection
