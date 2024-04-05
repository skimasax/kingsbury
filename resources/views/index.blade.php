<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EstateAgency Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('img/favicon.png') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

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
</head>

<body>

  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <!-- <div class="box-collapse">
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
  </div> -->
  <!--/ Form Search End /-->

  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="">Kingsbury<span class="color-b" style="color: #202F4B;">Global</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contact us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">Become an Agent</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(images/house1.jpeg)">
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
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-2.jpg)">
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
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-3.jpg)">
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
              <p class="content-c">
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
              <p class="content-c">
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
              <p class="content-c">
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
              <!-- <a href="property-grid.html">All Property
                <span class="ion-ios-arrow-forward"></span>
              </a> -->
            </div>
          </div>
        </div>
      </div>
      <div id="property-carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-6.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">Ikorodu Land
                      <!-- <br /> Olive Road Two</a> -->
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Coming Soon!!</span>
                  </div>
                  <a href="#" class="link-a">
                    <span class=""></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Ikorodu Mega Court</h4>
                      <span>
                        Our Fast-selling Ikorodu Land <br> with Agreement and C of O.
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-3.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
            <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">Abuja Land
                      <!-- <br /> Olive Road Two</a> -->
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Coming Soon!!</span>
                  </div>
                  <a href="#" class="link-a">
                    <span class=""></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Abuja Mega Court</h4>
                      <span>
                        Our Fast-selling Abuja Land <br> with Agreement and C of O.
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-7.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
            <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">Epe Land
                      <!-- <br /> Olive Road Two</a> -->
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Coming Soon!!</span>
                  </div>
                  <a href="#" class="link-a">
                    <span class=""></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Epe Mega Court</h4>
                      <span>
                        Our Fast-selling Epe Land <br> with Agreement and C of O.
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="img/property-10.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
            <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">Ibadan Land
                      <!-- <br /> Olive Road Two</a> -->
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Coming Soon!!</span>
                  </div>
                  <a href="#" class="link-a">
                    <span class=""></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Ibadan Mega Court</h4>
                      <span>
                        Our Fast-selling Ibadan Land <br> with Agreement and C of O.
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
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
        <div class="container-fluid img-fluid" style="background-image: url(images/kingsbury2.jpeg); height:600px; background-size: cover;">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class= "col-lg-2"></div>
                  <div class="col-lg-8">
                    <div class="justify-content-center intro-body">
                        <nav aria-label="breadcrumb">
                            <!-- <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item"><a href="#">About Us</a></li>
                            </ol> -->
                        </nav>
                     </div>
                  </div>
                  <div class= "col-lg-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card-box-c foo">
            <div class="card-header-c d-flex mt-3">
              <!-- <div class="card-box-ico">
                <span class="fa fa-gamepad"></span>
              </div> -->
              <div class="card-title-c align-self-center">
                <h2 class="">Real Estate Brokerage</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
              We provide comprehensive support to clients in their endeavors to purchase, sell, or lease residential properties, offering guidance and assistance throughout each phase of the transaction.
Utilizing advanced digital marketing strategies and
leveraging various social media platforms, we effectively showcase properties and engage with potential buyers, thereby maximizing exposure and facilitating successful property transactions.
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
            <div class="card-header-c d-flex mt-3">
              <!-- <div class="card-box-ico">
                <span class="fa fa-usd"></span>
              </div> -->
              <div class="card-title-c align-self-center">
                <h2 class="">Real Estate Development</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
              We specialize in the comprehensive development of mixed-use residential and commercial projects, managing the entire project life cycle from inception to fruition. Our oversight encompasses all acets of the development process, ensuring seamless execution and successful project delivery.
Our approach begins with meticulous market research
and feasibility studies, enabling us to identify promising
development prospects while effectively mitigating
associated risks. Collaboration lies at the heart of our
operations, as we work closely with architects, engineers,
contractors, and other stakeholders to align efforts and
achieve project objectives within established timelines and budgetary constraints.
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
            <div class="card-header-c d-flex mt-3">
              <!-- <div class="card-box-ico">
                <span class="fa fa-home"></span>
              </div> -->
              <div class="card-title-c align-self-center">
                <h2 class="">Real Estate Investment</h2>
              </div>
            </div>
            <div class="card-body-c">
              <p class="content-c">
              We specialize in formulating and implementing investment strategies tailored to acquire residential and commercial properties situated in burgeoning markets demonstrating significant growth potential.
Our approach begins with meticulous market
research and in-depth financial analysis, enabling
us to identify undervalued properties poised for
substantial appreciation. Additionally, we employ
value-add strategies, including but not limited to
renovations, rebranding initiatives, and optimization
of property management practices, aimed at
GLOBAL INVESTMENT LIMITED
enhancing the value of acquired assets to their
fullest potential. .
We actively cultivate strategic partnerships with industry-leading professionals, reputable lenders, and proficient property management entities. Through these collaborative efforts, we streamline our investment processes, ensuring efficient execution and maximizing returns on investment.
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
    <!--Our Services -->

  <!--/ About Us /-->
  <section class="section-agents section-t8" id="about">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">About Us</h2>
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
        <div class="container-fluid" style="background-image: url(img/slide-about-1.jpg); height:300px; background-size: cover;">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class= "col-lg-2"></div>
                  <div class="col-lg-8">
                    <div class="justify-content-center intro-body">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center text-uppercase">
                                <li class="breadcrumb-item"><a href="#">About Us</a></li>
                            </ol>
                        </nav>
                     </div>
                  </div>
                  <div class= "col-lg-2"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class="align-self-center">
          <p style="font-size:17px;">
            We are a forward-thinking real estate firm equipped with
            cutting-edge technology and innovative solutions to transform
            your vision of the perfect home into reality. We firmly advocate
            that investing in real estate transcends mere financial gain; it's
            about investing in a contemporary, tech-driven lifestyle that
            promises both satisfaction and substantial returns on investment.
            Our expertise extends beyond the mere transactional aspect of
            home sales. We are committed to guiding our clients towards
            genuine wealth-building opportunities through strategic real
            estate investments. At Kingsbury, we are dedicated to bridging the
            gap between aspiration and actualization, ensuring that every
            client's desires seamlessly manifest into tangible realities
          </p>
          <p style="font-size: 17px;">
            Welcome to Kingsbury—where dreams are realized, and aspirations
            materialize in the form of contemporary living spaces that redefine
            the essence of modern luxury.

          </p>
        </div>
      </div>
    </div>
  </section>
  <!--/ About Us End /-->

  <!--/ News Star /-->
  <!-- <section class="section-news section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Latest News</h2>
            </div>
            <div class="title-link">
              <a href="blog-grid.html">All News
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="new-carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-2.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">House</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">House is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-5.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Travel is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-7.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Park</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="blog-single.html">Park is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-c">
          <div class="card-box-b card-shadow news-box">
            <div class="img-box-b">
              <img src="img/post-3.jpg" alt="" class="img-b img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-header-b">
                <div class="card-category-b">
                  <a href="#" class="category-b">Travel</a>
                </div>
                <div class="card-title-b">
                  <h2 class="title-2">
                    <a href="#">Travel is comming
                      <br> new</a>
                  </h2>
                </div>
                <div class="card-date">
                  <span class="date-b">18 Sep. 2017</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--/ News End /-->

  <!--/ Testimonials Star /-->
  <!-- <section class="section-testimonials section-t8 nav-arrow-a">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">Testimonials</h2>
            </div>
          </div>
        </div>
      </div>
      <div id="testimonial-carousel" class="owl-carousel owl-arrow">
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="img/testimonial-1.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="img/mini-testimonial-1.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Albert & Erika</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-a">
          <div class="testimonials-box">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-img">
                  <img src="img/testimonial-2.jpg" alt="" class="img-fluid">
                </div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div class="testimonial-ico">
                  <span class="ion-ios-quote"></span>
                </div>
                <div class="testimonials-content">
                  <p class="testimonial-text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam praesentium
                    debitis hic ber quibusdam
                    voluptatibus officia expedita corpori.
                  </p>
                </div>
                <div class="testimonial-author-box">
                  <img src="img/mini-testimonial-2.jpg" alt="" class="testimonial-avatar">
                  <h5 class="testimonial-author">Pablo & Emma</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  <!--/ Testimonials End /-->

  <!--/ footer Star /-->
  <section class="section-footer" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand" style="color:#202F4B">Kingsbury Global Investment Limited</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                <i style="color: #202F4B;">Where desires meet reality....Contact us<i/>
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a" style="color:#F4C203"> Address.</span> No5, Opeloyeru street Ketu Lagos.
                </li>
                <li class="color-a">
                  <span class="color-text-a" style="color:#F4C203">Email .</span> kingsbury.globalltd@gmail.com</li>
                <li class="color-a">
                  <span class="color-text-a" style="color:#F4C203">Phone .</span>07048000779</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <!-- <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div> -->
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <!-- <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">International sites</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Venezuela</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">China</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Hong Kong</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Argentina</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Singapore</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Philippines</a>
                </li>
              </ul>
            </div>
          </div> -->
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#about">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#property">Property</a>
              </li>
              <!-- <li class="list-inline-item">
                <a href="#">Blog</a>
              </li> -->
              <li class="list-inline-item">
                <a href="#footer">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://facebook.com/kingsbury">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <!-- <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li> -->
              <li class="list-inline-item">
                <a href="https://instagram.com/kingsbury">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://linkedin.com/kingsbury">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
              </li>
              <!-- <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li> -->
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a">Kingbury Global Limited</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
            -->
            <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
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
