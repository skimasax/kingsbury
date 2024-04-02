<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: "Barlow", sans-serif;
        }
        .slider-container {
            position: relative;
        }
        .menu-bars {
            position: absolute;
            top: 20px;
            right: 20px;
            z-index: 1;
            margin: 5px;
            color: yellow;
            background-color: #022366; /* Different blue background */
            padding: 10px;
            border-radius: 5px;
        }
        #logo {
            position: absolute;
            top: 20px;
            left: 20px;
            z-index: 1;
            height: 90px;
            width: auto;
        }
        .navbar-brand.active {
            color: #F4C203; /* Set active menu item color to yellow */
        }
        .navbar-brand a{
            color: #F4C203; /* Set active menu item color to yellow */
        }
    </style>
    <title>Slider Background with Menu Bars</title>
</head>
<body>
    <div class="slider-container">
        <!-- Logo -->
        <img src="{{ asset('images/logo.jpg') }}" id="logo" alt="Logo" class="img-fluid">
        <!-- End Logo -->

        <!-- Menu Bars -->
        <div class="menu-bars">
            <nav class="navbar navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand mb-0 h1 active" href="#">Home</a>
                    <a class="navbar-brand mb-0 h1" href="#">About Us</a>
                    <a class="navbar-brand mb-0 h1" href="#">Contact Us</a>
                    <a class="navbar-brand mb-0 h1" href="#">Become an Agent</a>
                </div>
            </nav>
        </div>
        <!-- End Menu Bars -->

        <!-- Carousel -->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner" style="height: calc(100vh - 70px);">
                <!-- Slider 1 -->
                <div class="carousel-item active">
                    <img src="{{ asset('images/house1.jpeg') }}" class="d-block w-100" alt="Slider Image">
                    <div class="welcome-text">Welcome to HAGITAL</div>
                </div>
                <!-- Slider 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/house2.png') }}" class="d-block w-100" alt="Slider Image">
                    <div class="welcome-text">Welcome to HAGITAL</div>
                </div>
                <!-- Slider 3 -->
                <div class="carousel-item">
                    <img src="{{ asset('images/house1.jpeg') }}" class="d-block w-100" alt="Slider Image">
                    <div class="welcome-text">Welcome to HAGITAL</div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- End Carousel -->
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
