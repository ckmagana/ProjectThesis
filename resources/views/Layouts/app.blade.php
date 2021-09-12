<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course: Accountancy</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link  rel="script" href = {{asset('js/app.js')}}>
    <style>
    
        
    </style>
</head>
<body style="background-image: linear-gradient(to left, green,#fde8ec); height: 100%;">
    

<header>
    @include('Layouts.header')
</header>


@yield('content')
<div class="row" style="margin:70px  0px 0px 0px;">
    
</div>
<footer>
    @include('Layouts.footer')
</footer>
</body>
</html>