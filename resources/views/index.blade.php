<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kingsbury Global Investment Limited</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="keywords" content="Nigerian real estate, Property for sale in Nigeria,Houses for rent in Lagos,Real estate agents in Nigeria,Property development in Nigeria,Affordable housing in Nigeria,Luxury apartments in Lagos,Commercial property for lease in Nigeria,Nigerian property market,Real estate investment in Nigeria,Property management in Nigeria,Estate agents in Lagos,Property valuation in Nigeria,2 bedroom apartments for sale in Ikeja Lagos,Commercial property for rent in Victoria Island Lagos,Affordable housing schemes in Nigeria,Luxury villas for sale in Abuja,Short let apartments in Lagos">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <!-- Bootstrap CSS File -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">


  <!-- Main Stylesheet File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
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

<body>

  <div class="click-closed"></div>


  <!--/ Nav Star /-->

  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <!-- <a class="navbar-brand text-brand" href="">Kingsbury<span class="color-b" style="color: #202F4B;">Global</span></a> -->
      <a class="navbar-brand text-brand" href=""><img width="150" src="{{ asset('images/kingsbury_logo.png') }}" alt="logo"></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="listingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Listing
            </a>
            <ul class="dropdown-menu" aria-labelledby="listingDropdown">
              <li><a class="dropdown-item" href="{{ url('property') }}">House</a></li>
              <li><a class="dropdown-item" href="{{ url('land') }}">Land</a></li>
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

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(images/4point/Olowora_Cam_View1-standard-height-2500px.jpeg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <!-- <p class="intro-title-top">Doral, Florida
                      <br> 78345</p> -->
                    <h1 class="intro-title mb-4">
                      <span class="color-b" style="color: white;">WELCOME </span> To
                      <br><span style="color: #F4C203;">Kingsbury Global Investment</span>
                      <br>Limited
                    </h1>
                    <!-- <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(images/amari/ABIJO_EXTERIOR_3A.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <!-- <p class="intro-title-top">Doral, Florida
                      <br> 78345</p> -->
                    <h1 class="intro-title mb-4">
                      <span class="color-b" style="color: white;">WELCOME </span> To
                      <br><span style="color: #F4C203;">Kingsbury Global Investment</span>
                      <br>Limited
                    </h1>
                    <!-- <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(images/Olivia/OLIVIA_COURTS_Scene_1A.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <!-- <p class="intro-title-top">Doral, Florida
                      <br> 78345</p> -->
                    <h1 class="intro-title mb-4">
                      <span class="color-b" style="color: white;">WELCOME </span> To
                      <br><span style="color: #F4C203;">Kingsbury Global Investment</span>
                      <br>Limited
                    </h1>
                    <!-- <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">rent | $ 12.000</span></a>
                    </p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->

  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">What we stand for:</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <!-- <span class="fa fa-gamepad"></span> -->
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Our Mission</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c" style="color:#202f4b">
                Our mission is to emerge as the leading real estate company in Africa and beyond, dedicated to surpassing the expectations of our valued customers through collaborative teamwork and unwavering dedication.
              </p>
            </div>
            <!-- <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div> -->
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <!-- <span class="fa fa-usd"></span> -->
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Our Vision</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c" style="color:#202f4b">
                Our vision is to solidify our position as a household name renowned for our commitment to meeting the diverse real estate needs of our esteemed clientele and partners.
              </p>
            </div>
            <div class="card-footer-c">
              <!-- <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a> -->
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex">
              <div class="card-box-ico">
                <!-- <span class="fa fa-home"></span> -->
              </div>
              <div class="card-title-c align-self-center">
                <h2 class="title-c">Core Values</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c" style="color:#202f4b">
                Integrity and accountability are the cornerstone of our business ethos, guiding every aspect of our operations and interactions.
              </p>
            </div>
            <!-- <div class="card-footer-c">
              <a href="#" class="link-c link-icon">Read more
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--/ Services End /-->

  <!--/ Property Star /-->
  <section class="section-property section-t8" id="property">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest Properties</h2>
            </div>
            <div class="title-link">
              <a href="{{url('property')}}">See More Properties
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="property-carousel" class="owl-carousel owl-theme">
        @if (count($data) > 0)
          @foreach ($data as $property )
            
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="{{$property->images_1}}" alt="" class="img-a img-fluid" style="height: 465px;">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="{{ route('property.single', ['id' => $property->id]) }}">{{ $property->property_name}}
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Check it out</span>
                  </div>
                  <a href="{{ route('property.single', ['id' => $property->id]) }}" class="link-a">
                    <span class=""></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">{{ $property->location }}
                      </h4>
                      <span class="card-info-title">
                        Price from {{ $property->price }}
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

        @endforeach
        @endif
      </div>
    </div>
  </section>
  <!--/ Property End /-->

  <!--Our Services -->
  <section class="section-agents section-t8" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Our Services</h2>
            </div>
            <div class="title-link">
              <!-- <a href="property-grid.html">All Property
                <span class="ion-ios-arrow-forward"></span>
              </a> -->
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box" style="width: 100%;">
              <img class="img-fluid" src="{{ asset('images/services.jpg') }}" alt="" style="width: 100%; height:400px">
            </div>
            <div class="title-link">
              <!-- <a href="property-grid.html">All Property
                <span class="ion-ios-arrow-forward"></span>
              </a> -->
            </div>
          </div>
        </div>
      </div>

      <div class="container mt-3" style="background-color: #F4C203;">
        <div class="row pt-4">
          <div class="col-lg-4 col-md-6 mb-4 p">
            <div class="card h-100">
              <div class="card-body">
                <h2 class="card-title" style="color:#202f4b"><b>Real Estate Brokerage</b></h2>
                <p class="card-text" style="color:#202f4b">We provide comprehensive support to clients in their endeavors to purchase, sell, or lease residential properties, offering guidance and assistance throughout each phase of the transaction. Utilizing advanced digital marketing strategies and leveraging various social media platforms, we effectively showcase properties and engage with potential buyers, thereby maximizing exposure and facilitating successful property transactions.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h2 class="card-title" style="color:#202f4b"><b>Real Estate Development</b></h2>
                <p class="card-text" style="color:#202f4b">We specialize in the comprehensive development of mixed-use residential and commercial projects, managing the entire project life cycle from inception to fruition. Our oversight encompasses all aspects of the development process, ensuring seamless execution and successful project delivery. Collaboration lies at the heart of our operations, as we work closely with architects, engineers, contractors, and other stakeholders to align efforts and achieve project objectives within established timelines and budgetary constraints.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <div class="card-body">
                <h2 class="card-title" style="color:#202f4b"><b>Real Estate Investment</b></h2>
                <p class="card-text" style="color:#202f4b">We specialize in formulating and implementing investment strategies tailored to acquire residential and commercial properties situated in burgeoning markets demonstrating significant growth potential. Our approach begins with meticulous market research and in-depth financial analysis, enabling us to identify undervalued properties poised for substantial appreciation. Additionally, we employ value-add strategies, including but not limited to renovations, rebranding initiatives, and optimization of property management practices, aimed at enhancing the value of acquired assets to their fullest potential.</p>
              </div>
            </div>
          </div>
        </div>
      </div>



    </div>
  </section>
  <!--Our Services -->

  <!--/ About Us /-->
  <section class="section-agents section-t8" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-center">
            <div class="title-box text-center">
              <h2 class="title-a">About Us</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 intro-banner" style="background-image: url(images/kingsbury_contractor.jpg);">
          <div class="overlay overlay-a"></div>
          <div class="intro-content text-center">
            <div class="container">
              <div class="row">
                <div class="col-lg-12">
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase">
                      <li class="breadcrumb-item"><a href="#">About Us</a></li>
                    </ol>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-12">
          <div class="about-content text-center">
            <p style="color:#202f4b">We are a forward-thinking real estate firm equipped with cutting-edge technology and innovative solutions to transform your vision of the perfect home into reality. We firmly advocate that investing in real estate transcends mere financial gain; it's about investing in a contemporary, tech-driven lifestyle that promises both satisfaction and substantial returns on investment.</p>
            <p style="color:#202f4b">Our expertise extends beyond the mere transactional aspect of home sales. We are committed to guiding our clients towards genuine wealth-building opportunities through strategic real estate investments. At Kingsbury, we are dedicated to bridging the gap between aspiration and actualization, ensuring that every client's desires seamlessly manifest into tangible realities.</p>
            <p style="color:#202f4b">Welcome to Kingsbury—where dreams are realized, and aspirations materialize in the form of contemporary living spaces that redefine the essence of modern luxury.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--/ About Us End /-->


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
  <a href="https://wa.me/2347048000779" target="_blank" class="whatsapp-icon" style="color: green;">
    <i class="fa-brands fa-whatsapp fa-3x"></i>
  </a>
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