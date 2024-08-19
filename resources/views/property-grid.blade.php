<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>EstateAgency Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <style>
    /* Position the icon at the bottom left */
    .whatsapp-icon {
      position: fixed;
      bottom: 20px;
      left: 20px;
      z-index: 1000;
      /* Make sure it's above other content */
    }

    /* For mobile devices */
    @media only screen and (max-width: 767px) {
      .navbar-brand {
        font-size: 20px;
        /* Adjust font size as needed */
      }

      .navbar-collapse {
        background-color: #fff;
        /* Adjust background color as needed */
        border-top: 1px solid #e5e5e5;
        /* Add border for separation */
      }

      .navbar-nav .nav-item {
        margin-bottom: 10px;
        /* Add margin between nav items */
      }

      .navbar-nav .nav-link {
        font-size: 16px;
        /* Adjust font size as needed */
      }

      .navbar-toggler {
        border-color: #fff;
        /* Adjust border color as needed */
      }

      .intro-item {
        height: 250px;
        /* Adjust height as needed */
        background-size: cover;
      }

      .intro-title {
        font-size: 24px;
        /* Adjust font size as needed */
        line-height: 1.3;
        /* Adjust line height as needed */
        margin-top: 40px;
        /* Add space between title and top */
      }

      .intro-title span.color-b {
        display: block;
        /* Display each color span on a new line */
      }

      .intro-title span {
        display: block;
      }

      .intro-content {
        padding-top: 50px;
        /* Add padding to intro content */
      }

      .card-box-c {
        margin-bottom: 30px;
      }

      .title-c {
        font-size: 20px;
        margin-bottom: 10px;
      }

      .content-c {
        font-size: 14px;
        line-height: 1.6;
      }

      .title-a {
        font-size: 24px;
        /* Adjust font size as needed */
      }

      .card-title-a {
        font-size: 18px;
        /* Adjust font size as needed */
        margin-bottom: 5px;
        /* Add margin below the title */
      }

      .price-a {
        font-size: 14px;
        /* Adjust font size as needed */
      }

      .card-info-title {
        font-size: 14px;
        /* Adjust font size as needed */
      }

      .card-info span {
        font-size: 12px;
        /* Adjust font size as needed */
      }

      .intro-content {
        height: 300px;
        /* Adjust height as needed for mobile */
      }

      .container-fluid {
        padding: 0;
        /* Remove padding for full width */
      }

      .intro-body {
        text-align: center;
        /* Center align content on mobile */
      }

      #ourServicesImage {
        display: none;
      }
    }

    .card {
      border: none;
      transition: all 0.3s;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .card:hover {
      box-shadow: 0 6px 8px rgba(0, 0, 0, 0.3);
    }

    .card-title {
      font-size: 1.5rem;
      color: #333;
      margin-bottom: 1rem;
    }

    .card-text {
      font-size: 1rem;
      color: #666;
    }

    #bimbo {
      color: white;
      display: inline-block;
      /* Ensure it's displayed inline */
      visibility: visible;
      /* Ensure visibility is set to visible */
      opacity: 1;
    }

    @media (max-width: 768px) {
      .card {
        margin-bottom: 30px;
      }
    }

    .intro-banner {
      height: 300px;
      background-size: cover;
      background-position: top;
      position: relative;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .intro-content {
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100%;
    }

    .about-content {
      font-size: 17px;
      line-height: 1.6;
    }

    @media (max-width: 768px) {
      .bg-image {
        height: 100px;
      }

      .intro-banner {
        height: 200px;
      }

      .about-content {
        font-size: 16px;
      }

      #bimbo {
        color: white;
        display: inline-block;
        /* Ensure it's displayed inline */
        visibility: visible;
        /* Ensure visibility is set to visible */
        opacity: 1;
      }
    }

    .section-footer {
      padding: 60px 0;
      background-color: white;
    }

    .widget-a {
      margin-bottom: 30px;
    }

    .w-header-a h3 {
      font-size: 24px;
      font-weight: 600;
      color: #202f4b;
      margin-bottom: 15px;
    }

    .w-text-a {
      font-style: italic;
      color: #202f4b;
    }

    .w-footer-a ul {
      padding-left: 0;
      list-style: none;
    }

    .w-footer-a li {
      margin-bottom: 10px;
      font-size: 16px;
      color: white;
    }

    .color-text-a {
      color: white;
    }

    @media (max-width: 768px) {
      .w-header-a h3 {
        font-size: 20px;
      }

      .w-footer-a li {
        font-size: 14px;
      }
    }

    .section-footer {
      background-color: #202f4b;
      color: white;
      padding: 40px 0;
    }

    .nav-footer {
      margin-bottom: 20px;
    }

    .nav-footer ul {
      padding-left: 0;
      list-style: none;
    }

    .nav-footer a {
      color: white;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .nav-footer a:hover {
      color: #f4c203;
    }

    .socials-a ul {
      padding-left: 0;
      list-style: none;
    }

    .socials-a i {
      font-size: 24px;
      margin: 0 10px;
    }

    .socials-a i:hover {
      color: white;
    }

    .copyright {
      margin-top: 20px;
      font-size: 14px;
    }

    .color-a {
      color: #f4c203;
    }
  </style>


</head>
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="Type">Type</label>
              <select class="form-control form-control-lg form-control-a" id="Type">
                <option>All Type</option>
                <option>For Rent</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="city">City</label>
              <select class="form-control form-control-lg form-control-a" id="city">
                <option>All City</option>
                <option>Alabama</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="garages">Garages</label>
              <select class="form-control form-control-lg form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="bathrooms">Bathrooms</label>
              <select class="form-control form-control-lg form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group">
              <label for="price">Min Price</label>
              <select class="form-control form-control-lg form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- <a class="navbar-brand text-brand" href="">Kingsbury<span class="color-b" style="color: #202F4B;">Global</span></a> -->
      <a class="navbar-brand text-brand" href=""><img width="150" src="https://res.cloudinary.com/daqnlwgkp/image/upload/v1713427342/IMG_20240307_124643_774_l8g3pg.jpg" alt="logo"></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link " href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About us</a>
          </li>
          <li class="nav-item dropdown active">
    <a class="nav-link dropdown-toggle" href="#" id="listingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        Listing
    </a>
    <ul class="dropdown-menu" aria-labelledby="listingDropdown">
        <li><a class="dropdown-item" href="{{ url('property/house') }}">House</a></li>
        <li><a class="dropdown-item" href="{{ url('property/land') }}">Land</a></li>
    </ul>
</li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('agent')}}">Become a partner</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">Our Amazing Properties</h1>
            <span class="color-text-a">Grid Properties</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{route('home')}}">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Properties
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!--/ Property Grid Star /-->
  <section class="property-grid grid">
    <div class="container">
      <div class="row">
       @if (count($data) > 0)
        @foreach ($data as $property)
          
    
        <div class="col-md-4">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="{{$property->images_1}}" alt="" class="img-a img-fluid" style="height: 465px;">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="#" >{{$property->property_name}}
                      <br /> <span style="font-size:15px">{{$property->location}}</span></a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">{{$property->price}}</span>
                  </div>
                  <a href="{{ route('property.single', ['id' => $property->id]) }}" class="link-a">Click here to view
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>

                <!-- <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Beds</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Baths</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garages</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div> -->
              </div>
            </div>
          </div>
        </div>
        @endforeach   
      @endif

      </div>
      <!-- <div class="row">
        <div class="col-sm-12">
          <nav class="pagination-a">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <span class="ion-ios-arrow-back"></span>
                </a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">3</a>
              </li>
              <li class="page-item next">
                <a class="page-link" href="#">
                  <span class="ion-ios-arrow-forward"></span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div> -->
    </div>
  </section>
  <!--/ Property Grid End /-->


  <!--/ footer Star /-->
  <section class="section-footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand text-white">Kingsbury Global Investment Limited</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                <i class="text-brand text-white">Where desire meets reality... Contact us</i>
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <p class="color-text-a">Address:No5, Opeloyeru street Ketu Lagos.</p>
                </li>
                <li class="color-a">
                  <p class="color-text-a">Email:info@kingsburyglobal.com</p>
                </li>
                <li class="color-a">
                  <p class="text-white" style="visibility: visible !important;">Phone:+(234)-7048000779</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline text-center text-md-left">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#about">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#property">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#footer">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a text-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a target="_blank" href="https://facebook.com/kingsbury">
                  <i class="fa fa-facebook" aria-hidden="true" style="color:white"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="https://www.instagram.com/kingsburyglobal">
                  <i class="fa fa-instagram" aria-hidden="true" style="color:white"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="https://www.linkedin.com/in/kingsbury-global-investment-limited-064b302b8?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app">
                  <i class="fa fa-linkedin" aria-hidden="true" style="color:white"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target="_blank" href="https://youtube.com/@kingsburyglobal?si=9skbUgBBrSvQDc0D">
                  <i class="fa fa-youtube" aria-hidden="true" style="color:white"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="text-center text-md-left">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Kingsbury Global Limited</span> All Rights Reserved.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>