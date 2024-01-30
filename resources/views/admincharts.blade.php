@extends('layouts.adminlayout')

@section('title', 'Admin Dashboard')

@section('head')

@endsection

@section('content')








        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-chart-bar"></i>
                </span> Charts
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                   
                  </li>
                </ul>
              </nav>
            </div>
           


              
           
            
              
  <div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Gender</h4>
                <canvas id="genderChart" class="chart"></canvas>
                <canvas id="pieChart" class="chart"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Countries</h4>
            <canvas id="countryChart" class="chart"></canvas>
        </div>
    </div>
</div>
   
</div>
<div class="row">
<div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Age range</h4>
                <canvas id="ageRangeChart" class="chart"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Experience with Digital Technologies</h4>
            <canvas id="experienceDigitalTechChart" class="chart"></canvas>
        </div>
    </div>
</div>
</div>


    <div class="row">
    <!-- Existing charts -->
    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">English Speaking Proficiency</h4>
                <canvas id="englishSpokenChart" class="chart"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">English Writing Proficiency</h4>
                <canvas id="englishWrittenChart" class="chart"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">French Speaking Proficiency</h4>
                <canvas id="frenchSpokenChart" class="chart"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">French Writing Proficiency</h4>
                <canvas id="frenchWrittenChart" class="chart"></canvas>
            </div>
        </div>
    </div>
</div>
            </div>
            
            
            
            
          </div>
          </div>
          

          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © GAIA.org</span>
             
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>


    <script>
    // Get the context of the canvas element we want to select
    var ctx8 = document.getElementById("experienceDigitalTechChart").getContext('2d');
    var ctx1 = document.getElementById("genderChart").getContext('2d');
    var ctx2 = document.getElementById("ageRangeChart").getContext('2d');
    var ctx3 = document.getElementById("countryChart").getContext('2d');

    // Create the charts
    var genderChart = new Chart(ctx1, {
        type: 'pie',
        data: {
            labels: @json($genderStatistics->pluck('gender')),
            datasets: [{
                data: @json($genderStatistics->pluck('count')),
                // Add colors for each gender
                backgroundColor: ['rgba(255, 99, 132, 0.5)', 'rgba(54, 162, 235, 0.5)'],
            }]
        }
    });

    var ageRangeChart = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: @json($ageRangeStatistics->pluck('age_range')),
            datasets: [{
              label: 'Number of Members',
                data: @json($ageRangeStatistics->pluck('count')),
                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 0.1
            }]
        }
    });
    var experienceDigitalTechChart = new Chart(ctx8, {
        type: 'bar',
        data: {
          
            datasets: [{
                label: '# of Users',
                data: @json($experienceDigitalTech),
                backgroundColor: 'rgba(153, 102, 255, 0.5)',
                borderColor: 'rgba(153, 102, 255, 1)',
                borderWidth: 1
            }]
        }
    });

    var countryChart = new Chart(ctx3, {
        type: 'doughnut',
        data: {
            labels: @json($countryStatistics->pluck('country')),
            datasets: [{
                data: @json($countryStatistics->pluck('count')),
                // Add colors for each country
                backgroundColor: ['rgba(153, 102, 255, 0.5)', // purple
                'rgba(255, 165, 0, 0.5)', // orange
    'rgba(54, 162, 235, 0.5)', // blue
    'rgba(255, 206, 86, 0.5)', // yellow
    'rgba(75, 192, 192, 0.5)', // green
    
    'rgba(255, 159, 64, 0.5)', // orange
    'rgba(128, 0, 0, 0.5)', // maroon
    'rgba(128, 128, 0, 0.5)', // olive
    'rgba(0, 128, 0, 0.5)', // green
    'rgba(128, 0, 128, 0.5)', // purple
    'rgba(0, 128, 128, 0.5)', // teal
    'rgba(0, 0, 128, 0.5)', // navy
    'rgba(0, 0, 255, 0.5)', // blue
'rgba(0, 255, 0, 0.5)', // lime
'rgba(255, 0, 0, 0.5)', // red
'rgba(0, 255, 255, 0.5)', // aqua
'rgba(255, 0, 255, 0.5)', // fuchsia
'rgba(192, 192, 192, 0.5)', // silver
'rgba(128, 128, 128, 0.5)', // gray
'rgba(255, 255, 0, 0.5)', // yellow
'rgba(0, 0, 0, 0.5)', // black

  ],
            }]
        }
    });



    var ctx4 = document.getElementById("englishSpokenChart").getContext('2d');
    var ctx5 = document.getElementById("englishWrittenChart").getContext('2d');
    var ctx6 = document.getElementById("frenchSpokenChart").getContext('2d');
    var ctx7 = document.getElementById("frenchWrittenChart").getContext('2d');

    // Create the charts
    var englishSpokenChart = new Chart(ctx4, {
        type: 'bar',
        data: {
           
            datasets: [{
                label: '# of Users',
                data: @json($englishSpoken),
                backgroundColor: 'rgba(255, 99, 132, 0.5)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        }
    });

    var englishWrittenChart = new Chart(ctx5, {
        type: 'bar',
        data: {
            
            datasets: [{
                label: '# of Users',
                data: @json($englishWritten),
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        }
    });

    var frenchSpokenChart = new Chart(ctx6, {
        type: 'bar',
        data: {
            
            datasets: [{
                label: '# of Users',
                data: @json($frenchSpoken),
                backgroundColor: 'rgba(255, 206, 86, 0.5)',
                borderColor: 'rgba(255, 206, 86, 1)',
                borderWidth: 1
            }]
        }
    });

    var frenchWrittenChart = new Chart(ctx7, {
        type: 'bar',
        data: {
            
            datasets: [{
                label: '# of Users',
                data: @json($frenchWritten),
                backgroundColor: 'rgba(75, 192, 192, 0.5)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        }
    });
</script>
    
<script src="{{ asset('/vendors/js/vendor.bundle.base.js') }}"></script>



<!-- Custom scripts -->

<script src="{{ asset('/js/misc.js') }}"></script>







    
  

  

@endsection