@extends('layouts.layout')

@section('title', 'Applicants')

@section('head')




<link rel="stylesheet" href="{{ secure_asset('/styles/data.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">





@endsection



@section('content')
<body>
  
   <img src="logo2.png" id="table-logo" alt="GAIA club logo">
    <h1>Club Members Data Display</h1>

    <table>
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

    

    
    
</body>
</html>

@endsection
