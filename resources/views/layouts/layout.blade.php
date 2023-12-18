<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="{{ secure_asset('images/logo3.png') }}" type="image/x-icon">


   <title>@yield('title', 'GAIA Club registration')</title>
   <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
   
<link rel="stylesheet" href="{{ secure_asset('/styles/main.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('/styles/main 3.css') }}"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">




</head> 

@yield('content')






</html>