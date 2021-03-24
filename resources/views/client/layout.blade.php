<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="OYI (Outstanding Youth Indonesia) merupakan Start-up Indonesia yang percaya bahwa 
    Pemuda Indonesia">

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    
    <!-- css -->
    <link rel="stylesheet" href="index.css">
    
    <!-- AOS -->
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->

    <title>Outstanding Youth Indonesia</title>
    <link rel="shortcut icon" href="{{ url('/images/homeClient/logo.svg') }}" sizes="16x16"/>
    @yield('css')
  </head>
  <body>
 
    <!-- nav bar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.html">
                <img class="brand-img" src="{{ url('/images/homeClient/logo-panjang.svg') }}" alt="logo-oyi">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" aria-current="page" href="#event">Event</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="">Artikel</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="">Tentang Kami</a>
                    </li>
                </ul>
            </div>
        </div>
      </nav>
    
      @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
        AOS.init();
    </script>
</html>