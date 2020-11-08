<!doctype html>
<html>

<head>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <meta charset="utf-8">
    <title>Regex Tester</title>
</head>

<body style="background-color: black;">
    <nav class="navbar navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand" href="#">
            <img src="{{ asset('laravel.png') }}" width="30" height="30" alt="" loading="lazy">
            <span class="navbar-brand mb-0 h1" style="color: white">Laravel Regex Tester </span><span class="navbar-brand mb-0 h2" style="color: white">- A Regular Expression Tester for PHP</span>
            </a>
        </div>
    </nav>
<div class="container">

    <div class="row">
        <div class="col-sm-12 blog-main"> @yield('content') </div>
    </div>
</div>
</body>

</html>
