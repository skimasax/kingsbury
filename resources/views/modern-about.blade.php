@extends('layouts.modern')

@section('title', 'About Us - Kingsbury Global Investment Limited')
@section('description', 'Learn about Kingsbury Global Investment Limited, our leadership team, mission, and commitment to excellence in Nigerian real estate.')

@section('content')
<!-- Hero Section -->
<section class="hero" style="height: 70vh; background-image: linear-gradient(rgba(32, 47, 75, 0.8), rgba(26, 37, 47, 0.6)), url('{{ asset('images/kingsbury_contractor.jpg') }}');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title" style="font-size: var(--text-6xl);" data-aos="fade-up">
            About <span style="color: var(--secondary-color);">Kingsbury Global</span>
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
            Transforming visions into reality with cutting-edge technology and innovative real estate solutions
        </p>
        
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mt-4" data-aos="fade-up" data-aos-delay="400">
            <div style="background: rgba(255, 255, 255, 0.15); backdrop-filter: blur(15px); border-radius: 50px; padding: 12px 24px; display: inline-flex; align-items: center; gap: 12px; border: 1px solid rgba(255, 255, 255, 0.2);">
                <a href="{{ route('home') }}" style="color: rgba(255,255,255,0.9); text-decoration: none; font-weight: 500; transition: all 0.3s ease;">
                    <i class="fas fa-home" style="margin-right: 6px;"></i>Home
                </a>
                <i class="fas fa-chevron-right" style="color: rgba(255,255,255,0.6); font-size: 0.8rem;"></i>
                <span style="color: var(--secondary-color); font-weight: 600;">About Us</span>
            </div>
        </nav>
    </div>
</section>

<!-- Company Overview -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="pe-lg-4">
                    <h2 style="color: var(--primary-color); margin-bottom: 2rem; font-size: 2.5rem;">Our Story</h2>
                    <p style="color: var(--text-light); font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
                        We are a forward-thinking real estate firm equipped with cutting-edge technology and innovative solutions to transform your vision of the perfect home into reality. We firmly advocate that investing in real estate transcends mere financial gain; it's about investing in a contemporary, tech-driven lifestyle that promises both satisfaction and substantial returns on investment.
                    </p>
                    <p style="color: var(--text-light); font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
                        Our expertise extends beyond the mere transactional aspect of home sales. We are committed to guiding our clients towards genuine wealth-building opportunities through strategic real estate investments. At Kingsbury, we are dedicated to bridging the gap between aspiration and actualization, ensuring that every client's desires seamlessly manifest into tangible realities.
                    </p>
                    <p style="color: var(--text-light); font-size: 1.1rem; line-height: 1.8; margin-bottom: 2rem;">
                        Welcome to Kingsbury—where dreams are realized, and aspirations materialize in the form of contemporary living spaces that redefine the essence of modern luxury.
                    </p>
                    
                    <div class="d-flex gap-3">
                        <a href="{{ url('property') }}" class="btn btn-primary">
                            <i class="fas fa-building"></i>
                            View Properties
                        </a>
                        <a href="{{ url('agent') }}" class="btn btn-outline-primary">
                            <i class="fas fa-handshake"></i>
                            Partner With Us
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="position-relative">
                    <img src="{{ asset('images/kingsbury_contractor.jpg') }}" alt="Kingsbury Office" 
                         class="img-fluid rounded-3" style="box-shadow: var(--shadow-lg);">
                    <div class="position-absolute bottom-0 start-0 m-4 bg-white p-4 rounded-2" style="box-shadow: var(--shadow-lg);">
                        <div class="d-flex align-items-center gap-3">
                            <div style="width: 50px; height: 50px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                <i class="fas fa-award" style="color: var(--primary-color); font-size: 1.5rem;"></i>
                            </div>
                            <div>
                                <div style="font-weight: 600; color: var(--primary-color);">10+ Years</div>
                                <div style="color: var(--text-light); font-size: 0.9rem;">Excellence in Real Estate</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission, Vision, Values -->
<section class="section" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Our Foundation</h2>
            <p>The core principles that guide every aspect of our business</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <div class="service-icon mb-4">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3 style="color: var(--primary-color); margin-bottom: 1.5rem;">Our Mission</h3>
                        <p style="color: var(--text-light); line-height: 1.7;">
                            Our mission is to emerge as the leading real estate company in Africa and beyond, dedicated to surpassing the expectations of our valued customers through collaborative teamwork and unwavering dedication.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <div class="service-icon mb-4">
                            <i class="fas fa-eye"></i>
                        </div>
                        <h3 style="color: var(--primary-color); margin-bottom: 1.5rem;">Our Vision</h3>
                        <p style="color: var(--text-light); line-height: 1.7;">
                            Our vision is to solidify our position as a household name renowned for our commitment to meeting the diverse real estate needs of our esteemed clientele and partners.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <div class="service-icon mb-4">
                            <i class="fas fa-heart"></i>
                        </div>
                        <h3 style="color: var(--primary-color); margin-bottom: 1.5rem;">Core Values</h3>
                        <p style="color: var(--text-light); line-height: 1.7;">
                            Integrity and accountability are the cornerstone of our business ethos, guiding every aspect of our operations and interactions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CEO Biography -->
<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="text-center">
                    <div class="position-relative d-inline-block">
                        <img src="{{ asset('/images/ceo.JPG')}}" 
                             alt="CEO Kingsbury Global" 
                             class="img-fluid rounded-3" 
                             style="width: 450px; height: 600px; object-fit: cover; box-shadow: var(--shadow-lg);">
                        <div class="position-absolute bottom-0 start-50 translate-middle-x mb-n3">
                            <div class="bg-white px-4 py-2 rounded-pill" style="box-shadow: var(--shadow-lg);">
                                <span style="color: var(--primary-color); font-weight: 600;">Chief Executive Officer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <div class="ps-lg-5">
                    <div class="mb-4">
                        <span style="color: var(--secondary-color); font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em;">Leadership</span>
                    </div>
                    <h2 style="color: var(--primary-color); margin-bottom: 1rem; font-size: 2.5rem;">Meet Our CEO</h2>
                    <h3 style="color: var(--text-dark); margin-bottom: 2rem; font-size: 1.8rem;">Olalekan Obafemi</h3>
                    
                    <p style="color: var(--text-light); font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
                        Obafemi Olalekan is a highly motivated person with good communication skills. He has optimal and valuable contribution to organization goals through great team work in a challenging environment where his skills and experiences are well maximized for the organization’s optimal growth.
                    </p>
                    
                    <p style="color: var(--text-light); font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
                       He is a graduate of Olabisi Onabanjo University with a B.sc in Pure and Applied Mathematics. He also obtained a professional skill in Critical Tools for Effective Sales and marketing at Lagos Business School.
                    </p>
                    
                    <p style="color: var(--text-light); font-size: 1.1rem; line-height: 1.8; margin-bottom: 2rem;">
                        He is a goal getter and a self motivated individual who is diligent in his work. In addition to his degree, he is a chartered sales professional from the Certified Sales Professional Institute (A.S.P). He is also a certified Health, Safety and Environment officer (HSE) level I of I to III of III. His sales & marketing experience spans for a period of 10 years in the Real Estate industry. He has worked in various capacities within the sales department from being a sales executive to the Head of sales with exponential growth in his career. 

Olalekan is presently the Managing Partner at  Kingsbury global investment limited and also consulting as a real estate brokerage, Development and other real estate services.
                    </p>
                    
                    <!-- CEO Achievements -->
                    <div class="row g-3">
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-3">
                                <div style="width: 40px; height: 40px; background: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-trophy" style="color: var(--primary-color);"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600; color: var(--primary-color);">10+ Years</div>
                                    <div style="color: var(--text-light); font-size: 0.9rem;">Industry Experience</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="d-flex align-items-center gap-3">
                                <div style="width: 40px; height: 40px; background: var(--secondary-color); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-building" style="color: var(--primary-color);"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600; color: var(--primary-color);">500+</div>
                                    <div style="color: var(--text-light); font-size: 0.9rem;">Projects Delivered</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Team -->
<section class="section" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Meet Our Team</h2>
            <p>The dedicated professionals behind Kingsbury's success</p>
        </div>
        
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="position-relative">
                    <img src="{{asset('/images/teams.jpeg')}}" 
                         alt="Kingsbury Team" 
                         class="img-fluid rounded-3" 
                         style="box-shadow: var(--shadow-lg); width: 100%; height: 400px; object-fit: cover;">
                    
                    <!-- Team overlay badge -->
                    <!-- <div class="position-absolute top-0 end-0 m-4">
                        <div class="bg-white p-3 rounded-2" style="box-shadow: var(--shadow-lg);">
                            <div class="d-flex align-items-center gap-2">
                                <div style="width: 40px; height: 40px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                    <i class="fas fa-users" style="color: var(--primary-color); font-size: 1.2rem;"></i>
                                </div>
                                <div>
                                    <div style="font-weight: 600; color: var(--primary-color); font-size: 0.9rem;">Expert Team</div>
                                    <div style="color: var(--text-light); font-size: 0.8rem;">5+ Professionals</div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="ps-lg-5">
                    <div class="mb-4">
                        <span style="color: var(--secondary-color); font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em;">Our People</span>
                    </div>
                    <h3 style="color: var(--primary-color); margin-bottom: 2rem; font-size: 2rem;">A Team Built for Excellence</h3>
                    
                    <p style="color: var(--text-light); font-size: 1.1rem; line-height: 1.8; margin-bottom: 1.5rem;">
                        Our diverse team of real estate professionals brings together decades of combined experience in property development, sales, marketing, legal advisory, and project management.
                    </p>
                    
                    <p style="color: var(--text-light); font-size: 1.1rem; line-height: 1.8; margin-bottom: 2rem;">
                        From seasoned sales executives to innovative marketing strategists, each team member is committed to delivering exceptional service and ensuring every client's real estate journey is seamless and successful.
                    </p>
                    
                    <!-- Team highlights -->
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="d-flex align-items-start gap-3">
                                <div style="width: 50px; height: 50px; background: rgba(244, 194, 3, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-graduation-cap" style="color: var(--secondary-color); font-size: 1.3rem;"></i>
                                </div>
                                <div>
                                    <h6 style="color: var(--primary-color); margin-bottom: 0.5rem;">Certified Professionals</h6>
                                    <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">Licensed real estate experts with industry certifications</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="d-flex align-items-start gap-3">
                                <div style="width: 50px; height: 50px; background: rgba(244, 194, 3, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-handshake" style="color: var(--secondary-color); font-size: 1.3rem;"></i>
                                </div>
                                <div>
                                    <h6 style="color: var(--primary-color); margin-bottom: 0.5rem;">Client-Focused</h6>
                                    <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">Dedicated to exceeding expectations and building lasting relationships</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="d-flex align-items-start gap-3">
                                <div style="width: 50px; height: 50px; background: rgba(244, 194, 3, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-lightbulb" style="color: var(--secondary-color); font-size: 1.3rem;"></i>
                                </div>
                                <div>
                                    <h6 style="color: var(--primary-color); margin-bottom: 0.5rem;">Innovation Driven</h6>
                                    <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">Leveraging technology for modern real estate solutions</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="d-flex align-items-start gap-3">
                                <div style="width: 50px; height: 50px; background: rgba(244, 194, 3, 0.1); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                    <i class="fas fa-award" style="color: var(--secondary-color); font-size: 1.3rem;"></i>
                                </div>
                                <div>
                                    <h6 style="color: var(--primary-color); margin-bottom: 0.5rem;">Award Winning</h6>
                                    <p style="color: var(--text-light); font-size: 0.9rem; margin: 0;">Recognized for excellence in real estate services</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4 pt-3">
                        <a href="{{ url('agent') }}" class="btn btn-primary">
                            <i class="fas fa-users"></i>
                            Join Our Team
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Company Statistics -->
<section class="section" style="background: var(--gradient-primary);">
    <div class="container">
        <div class="row text-center text-white">
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="p-4">
                    <div style="font-size: 3rem; font-weight: 700; color: var(--secondary-color); margin-bottom: 1rem;" class="stat-number">100+</div>
                    <h5 style="color: var(--white); margin-bottom: 0.5rem;">Properties Sold</h5>
                    <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem;">Successfully delivered to satisfied clients</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-4">
                    <div style="font-size: 3rem; font-weight: 700; color: var(--secondary-color); margin-bottom: 1rem;" class="stat-number">75+</div>
                    <h5 style="color: var(--white); margin-bottom: 0.5rem;">Happy Clients</h5>
                    <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem;">Trusted by families and investors</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="p-4">
                    <div style="font-size: 3rem; font-weight: 700; color: var(--secondary-color); margin-bottom: 1rem;" class="stat-number">20+</div>
                    <h5 style="color: var(--white); margin-bottom: 0.5rem;">Projects Involved In</h5>
                    <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem;">Across Lagos, Abuja, and beyond</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="p-4">
                    <div style="font-size: 3rem; font-weight: 700; color: var(--secondary-color); margin-bottom: 1rem;" class="stat-number">10+</div>
                    <h5 style="color: var(--white); margin-bottom: 0.5rem;">Years Experience</h5>
                    <p style="color: rgba(255,255,255,0.8); font-size: 0.9rem;">Excellence in real estate</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <h2 style="color: var(--primary-color); margin-bottom: 2rem;">Ready to Work With Us?</h2>
            <p style="color: var(--text-light); font-size: 1.2rem; margin-bottom: 3rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                Whether you're looking to buy, sell, or invest in real estate, our experienced team is here to guide you every step of the way.
            </p>
            <div class="d-flex justify-content-center gap-4 flex-wrap">
                <a href="{{ url('property') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-building"></i>
                    Browse Properties
                </a>
                <a href="{{ url('agent') }}" class="btn btn-outline-primary btn-lg">
                    <i class="fas fa-handshake"></i>
                    Become a Partner
                </a>
                <a href="#footer" class="btn btn-ghost btn-lg" style="background: rgba(32, 47, 75, 0.1); color: var(--primary-color); border: 2px solid var(--primary-color);">
                    <i class="fas fa-phone"></i>
                    Contact Us
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    /* About page specific styles */
    .breadcrumb {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: var(--border-radius);
        padding: 1rem 2rem;
        margin: 0;
    }
    
    .breadcrumb-item + .breadcrumb-item::before {
        content: ">";
        color: rgba(255, 255, 255, 0.6);
    }
    
    /* Modern breadcrumb hover effects */
    nav[aria-label="breadcrumb"] a:hover {
        color: var(--secondary-color) !important;
        transform: translateY(-1px);
    }
    
    /* Team member cards hover effect */
    .card:hover {
        transform: translateY(-8px);
    }
    
    /* CEO section styling */
    .position-relative .position-absolute {
        z-index: 2;
    }
    
    @media (max-width: 768px) {
        .hero {
            height: 60vh;
        }
        
        .hero-title {
            font-size: var(--text-4xl) !important;
        }
        
        .hero-subtitle {
            font-size: 1rem;
        }
        
        .ps-lg-5,
        .pe-lg-4 {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }
        
        .col-lg-5,
        .col-lg-7,
        .col-lg-6 {
            margin-bottom: 2rem;
        }
        
        /* Mobile breadcrumb */
        nav[aria-label="breadcrumb"] div {
            padding: 8px 16px !important;
            font-size: 0.9rem;
        }
        
        /* Section adjustments */
        .section {
            padding: 3rem 0;
        }
        
        .section-title h2 {
            font-size: 2rem;
        }
        
        .section-title p {
            font-size: 1rem;
        }
        
        /* Card adjustments */
        .card-body {
            padding: 1.5rem;
        }
        
        /* Team section mobile */
        .row.g-4 {
            gap: 1.5rem !important;
        }
        
        /* Button adjustments */
        .btn {
            width: 100%;
            margin-bottom: 0.75rem;
        }
        
        .d-flex.gap-3 {
            flex-direction: column;
        }
        
        .d-flex.gap-4 {
            flex-direction: column;
            gap: 1rem !important;
        }
        
        /* Statistics section */
        .row.text-center.text-white > div {
            margin-bottom: 2rem;
        }
        
        .stat-number {
            font-size: 2.5rem !important;
        }
    }
    
    @media (max-width: 576px) {
        .hero {
            height: 50vh;
        }
        
        .hero-title {
            font-size: 2rem !important;
        }
        
        .hero-subtitle {
            font-size: 0.9rem;
        }
        
        .section {
            padding: 2.5rem 0;
        }
        
        .section-title h2 {
            font-size: 1.75rem;
        }
        
        .card-body {
            padding: 1.25rem;
        }
        
        /* CEO section mobile */
        .position-relative img {
            width: 100% !important;
            max-width: 300px;
            height: 350px !important;
        }
        
        /* Team highlights mobile */
        .row.g-4 .col-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        
        /* Statistics mobile */
        .stat-number {
            font-size: 2rem !important;
        }
        
        /* Typography mobile */
        h2 { font-size: 1.5rem; }
        h3 { font-size: 1.25rem; }
        h5 { font-size: 1rem; }
        h6 { font-size: 0.9rem; }
    }
</style>
@endpush

@push('scripts')
<script>
    // Counter animation for stats
    function animateCounters() {
        const counters = document.querySelectorAll('.stat-number');
        counters.forEach(counter => {
            const target = parseInt(counter.textContent.replace(/\D/g, ''));
            const suffix = counter.textContent.replace(/[0-9]/g, '');
            let current = 0;
            const increment = target / 100;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    counter.textContent = target + suffix;
                    clearInterval(timer);
                } else {
                    counter.textContent = Math.floor(current) + suffix;
                }
            }, 20);
        });
    }
    
    // Trigger counter animation when stats section is visible
    const statsSection = document.querySelector('.section[style*="gradient-primary"]');
    if (statsSection) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounters();
                    observer.unobserve(entry.target);
                }
            });
        });
        observer.observe(statsSection);
    }
</script>
@endpush