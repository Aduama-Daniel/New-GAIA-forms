


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
                  <i class="mdi mdi-home"></i>
                </span> Dashboard
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                   
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-danger card-img-holder text-white">
                  <!-- resources/views/admin.blade.php -->

<div class="card-body">
    <img src="{{ asset('/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
    <h4 class="font-weight-normal mb-3">Signups today <i class="mdi mdi-chart-line mdi-24px float-right"></i></h4>
    <h2 class="mb-5">{{ $todaySignups->signups ?? 0 }}</h2>
    
</div>

                </div>
              </div>
              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-info card-img-holder text-white">
                  <!-- resources/views/admin.blade.php -->

<div class="card-body">
    <img src="{{ asset('/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
    <h4 class="font-weight-normal mb-3">Total Registrations <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i></h4>
    <h2 class="mb-5">{{ $totalRegistrations }}</h2>
    
</div>



                </div>
              </div>

              <div class="col-md-4 stretch-card grid-margin">
                <div class="card bg-gradient-success card-img-holder text-white">
                  <!-- resources/views/admin.blade.php -->

<div class="card-body">
    <img src="{{ asset('/images/dashboard/circle.svg') }}" class="card-img-absolute" alt="circle-image" />
    <h4 class="font-weight-normal mb-3">Total Groups <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i></h4>
    <h2 class="mb-5">{{ $totalGroups }}</h2>
    
</div>



                </div>
              </div>


              
           
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Members</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                          <th>ID</th>
                <th>Group Name</th>
                <th>Surname</th>
                <th>Given Names</th>
                <th>University Name</th>
                <th>Faculty/Department</th>
               
                
                
                
                <th>Age</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Country</th>
                <th>More Information</th>
                          </tr>
                        </thead>
                        <tbody>

                        @foreach($members as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->group_name }}</td>
                <td>{{ $item->surname }}</td>
                <td>{{ $item->given_names }}</td>
                <td>{{ $item->university_name }}</td>
                <td>{{ $item->faculty_department }}</td>
                
               
                
                <td>{{ $item->age }}</td>
                <td>{{ $item->gender }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->phone_number }}</td>
                <td>{{ $item->country }}</td>
                <td>
                <a href="{{ secure_url('/user-details/' . $item->id) }}" class="btn btn-info">View Details</a>
</td>
                


            </tr>
            
            @endforeach




                          
                         
                          
                        </tbody>
                      </table>
                      {{ $members->links('pagination::bootstrap-4') }}
                     

                    </div>
                  </div>
                 

                </div>


                





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
<div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Age range</h4>
                <canvas id="ageRangeChart" class="chart"></canvas>
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
</script>
    
<script src="{{ secure_asset('/vendors/js/vendor.bundle.base.js') }}"></script>



<!-- Custom scripts -->

<script src="{{ secure_asset('/js/misc.js') }}"></script>







    
  

  @endsection