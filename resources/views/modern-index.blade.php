@extends('layouts.modern')

@section('title', 'Kingsbury Global Investment Limited - Premium Real Estate Solutions')

@section('content')
<!-- Hero Section -->
<section class="hero" style="background-image: linear-gradient(rgba(32, 47, 75, 0.7), rgba(26, 37, 47, 0.5)), url('{{ asset('images/4point/Olowora_Cam_View1-standard-height-2500px.jpeg') }}');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title" data-aos="fade-up">
            Welcome to <span style="color: var(--secondary-600);">Kingsbury Global</span><br>
            Investment Limited
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
            Discover premium real estate solutions with cutting-edge technology. 
            Your trusted partner for luxury properties, investment opportunities, 
            and exceptional real estate services in Nigeria.
        </p>
        <div class="d-flex justify-content-center gap-4 flex-wrap" data-aos="fade-up" data-aos-delay="400">
            <a href="#properties" class="btn btn-primary btn-lg">
                <i class="fas fa-search"></i>
                Explore Properties
            </a>
            <a href="#about" class="btn btn-ghost btn-lg">
                <i class="fas fa-play"></i>
                Learn More
            </a>
        </div>
    </div>
</section>

<!-- What We Stand For Section -->
<section class="section" style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%); margin-top: 0; padding-top: 6rem;">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>What We Stand For</h2>
            <p>Our core principles guide every aspect of our business, ensuring excellence in all we do</p>
        </div>
        
        <div class="row g-4">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <div class="service-icon">
                                <i class="fas fa-bullseye"></i>
                            </div>
                        </div>
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Our Mission</h3>
                        <p style="color: var(--text-light); line-height: 1.7;">
                            Our mission is to emerge as the leading real estate company in Africa and beyond, dedicated to surpassing the expectations of our valued customers through collaborative teamwork and unwavering dedication.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <div class="service-icon">
                                <i class="fas fa-eye"></i>
                            </div>
                        </div>
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Our Vision</h3>
                        <p style="color: var(--text-light); line-height: 1.7;">
                            Our vision is to solidify our position as a household name renowned for our commitment to meeting the diverse real estate needs of our esteemed clientele and partners.
                        </p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <div class="service-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                        </div>
                        <h3 style="color: var(--primary-color); margin-bottom: 1rem;">Core Values</h3>
                        <p style="color: var(--text-light); line-height: 1.7;">
                            Integrity and accountability are the cornerstone of our business ethos, guiding every aspect of our operations and interactions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest Properties Section -->
<section class="section" id="properties">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Latest Properties</h2>
            <p>Discover our premium collection of luxury homes and investment opportunities</p>
        </div>
        
        <div class="row g-4 mb-5">
            @if (count($data) > 0)
                @foreach ($data->take(6) as $index => $property)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <div class="card h-100">
                        <div class="position-relative">
                            <img src="{{ $property->images_1 }}" alt="{{ $property->property_name }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                            <div class="position-absolute top-0 end-0 m-3">
                                <span class="badge" style="background: linear-gradient(135deg, var(--secondary-color) 0%, #e6b800 100%); color: var(--primary-color); padding: 0.5rem 1rem; border-radius: 20px; font-weight: 600;">{{ $property->price }}</span>
                            </div>
                            <div class="card-img-overlay d-flex align-items-end" style="background: linear-gradient(0deg, rgba(32, 47, 75, 0.8) 0%, transparent 100%); opacity: 0; transition: opacity 0.3s ease;">
                                <div class="text-white w-100">
                                    <p class="mb-3">
                                        <i class="fas fa-map-marker-alt" style="color: var(--secondary-color);"></i>
                                        {{ $property->location }}
                                    </p>
                                    <a href="{{ route('property.single', ['id' => $property->id]) }}" class="btn btn-primary btn-sm">
                                        <i class="fas fa-eye"></i>
                                        View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color: var(--primary-color);">{{ $property->property_name }}</h5>
                            <p class="card-text text-muted">
                                <i class="fas fa-map-marker-alt" style="color: var(--secondary-color);"></i>
                                {{ $property->location }}
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="fw-bold" style="color: var(--primary-color); font-size: 1.1rem;">{{ $property->price }}</span>
                                <a href="{{ route('property.single', ['id' => $property->id]) }}" class="btn btn-outline-primary btn-sm">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        
        <div class="text-center" data-aos="fade-up">
            <a href="{{ url('property') }}" class="btn btn-secondary btn-lg">
                <i class="fas fa-th-large"></i>
                View All Properties
            </a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section" style="background: linear-gradient(135deg, var(--neutral-50) 0%, var(--neutral-0) 100%);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Our Services</h2>
            <p>Comprehensive real estate solutions tailored to meet your unique needs and investment goals</p>
        </div>
        
        <!-- Services Hero Image -->
        <div class="mb-16" data-aos="fade-up">
            <div class="text-center">
                <img src="{{ asset('images/services.jpg') }}" alt="Our Services" 
                     style="width: 100%; height: 400px; object-fit: cover; border-radius: var(--radius-4xl); box-shadow: var(--shadow-xl);">
            </div>
        </div>
        
        <div class="grid grid-cols-3 gap-8">
            <div class="card card-elevated" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body text-center">
                    <div class="mb-6">
                        <div style="width: 80px; height: 80px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: var(--shadow-secondary);">
                            <i class="fas fa-handshake" style="font-size: 2rem; color: var(--primary-900);"></i>
                        </div>
                    </div>
                    <h3 style="color: var(--primary-900); margin-bottom: var(--space-4);">Real Estate Brokerage</h3>
                    <p style="color: var(--neutral-600); line-height: 1.7;">
                        We provide comprehensive support to clients in their endeavors to purchase, sell, or lease residential properties, offering guidance and assistance throughout each phase of the transaction. Utilizing advanced digital marketing strategies and leveraging various social media platforms, we effectively showcase properties and engage with potential buyers.
                    </p>
                </div>
            </div>
            
            <div class="card card-elevated" data-aos="fade-up" data-aos-delay="200">
                <div class="card-body text-center">
                    <div class="mb-6">
                        <div style="width: 80px; height: 80px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: var(--shadow-secondary);">
                            <i class="fas fa-building" style="font-size: 2rem; color: var(--primary-900);"></i>
                        </div>
                    </div>
                    <h3 style="color: var(--primary-900); margin-bottom: var(--space-4);">Real Estate Development</h3>
                    <p style="color: var(--neutral-600); line-height: 1.7;">
                        We specialize in the comprehensive development of mixed-use residential and commercial projects, managing the entire project life cycle from inception to fruition. Our oversight encompasses all aspects of the development process, ensuring seamless execution and successful project delivery.
                    </p>
                </div>
            </div>
            
            <div class="card card-elevated" data-aos="fade-up" data-aos-delay="300">
                <div class="card-body text-center">
                    <div class="mb-6">
                        <div style="width: 80px; height: 80px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: var(--shadow-secondary);">
                            <i class="fas fa-chart-line" style="font-size: 2rem; color: var(--primary-900);"></i>
                        </div>
                    </div>
                    <h3 style="color: var(--primary-900); margin-bottom: var(--space-4);">Real Estate Investment</h3>
                    <p style="color: var(--neutral-600); line-height: 1.7;">
                        We specialize in formulating and implementing investment strategies tailored to acquire residential and commercial properties situated in burgeoning markets demonstrating significant growth potential. Our approach begins with meticulous market research and in-depth financial analysis.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="section" id="about">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>About Us</h2>
            <p>Transforming visions into reality with cutting-edge technology and innovative real estate solutions</p>
        </div>
        
        <!-- About Hero Image -->
        <!-- <div class="mb-12" data-aos="fade-up">
            <div class="hero" style="height: 400px; background-image: linear-gradient(rgba(32, 47, 75, 0.7), rgba(26, 37, 47, 0.5)), url('{{ asset('images/kingsbury_contractor.jpg') }}'); border-radius: var(--radius-4xl); overflow: hidden;">
                <div class="hero-overlay"></div>
                <div class="hero-content">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item">
                                <a href="#" style="color: var(--secondary-600); text-decoration: none; font-weight: var(--font-medium);">About Us</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div> -->
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center" data-aos="fade-up">
                    <p style="color: var(--neutral-700); font-size: var(--text-xl); margin-bottom: var(--space-8); line-height: 1.8;">
                        We are a forward-thinking real estate firm equipped with cutting-edge technology and innovative solutions to transform your vision of the perfect home into reality. We firmly advocate that investing in real estate transcends mere financial gain; it's about investing in a contemporary, tech-driven lifestyle that promises both satisfaction and substantial returns on investment.
                    </p>
                    
                    <p style="color: var(--neutral-700); font-size: var(--text-xl); margin-bottom: var(--space-8); line-height: 1.8;">
                        Our expertise extends beyond the mere transactional aspect of home sales. We are committed to guiding our clients towards genuine wealth-building opportunities through strategic real estate investments. At Kingsbury, we are dedicated to bridging the gap between aspiration and actualization, ensuring that every client's desires seamlessly manifest into tangible realities.
                    </p>
                    
                    <p style="color: var(--neutral-700); font-size: var(--text-xl); margin-bottom: var(--space-12); line-height: 1.8;">
                        Welcome to Kingsbury—where dreams are realized, and aspirations materialize in the form of contemporary living spaces that redefine the essence of modern luxury.
                    </p>
                    
                    <div class="flex justify-center gap-4 flex-wrap">
                        <a href="{{ url('agent') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-handshake"></i>
                            Partner With Us
                        </a>
                        <a href="#footer" class="btn btn-outline btn-lg">
                            <i class="fas fa-phone"></i>
                            Get In Touch
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section" data-aos="fade-up">
    <div class="container">
        <div class="grid grid-cols-4 gap-8">
            <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                <span class="stat-number">500+</span>
                <p class="stat-label">Properties Sold</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                <span class="stat-number">1000+</span>
                <p class="stat-label">Happy Clients</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                <span class="stat-number">50+</span>
                <p class="stat-label">Projects Completed</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                <span class="stat-number">10+</span>
                <p class="stat-label">Years Experience</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="section" style="background: var(--gradient-primary);">
    <div class="container">
        <div class="text-center text-white" data-aos="fade-up">
            <h2 style="color: var(--neutral-0); margin-bottom: var(--space-6);">Ready to Find Your Dream Property?</h2>
            <p style="color: rgba(255,255,255,0.9); font-size: var(--text-xl); margin-bottom: var(--space-8); max-width: 600px; margin-left: auto; margin-right: auto;">
                Let us help you discover the perfect property that matches your lifestyle and investment goals. Our expert team is ready to guide you every step of the way.
            </p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="{{ url('property') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-home"></i>
                    Browse Properties
                </a>
                <a href="{{ url('agent') }}" class="btn btn-ghost btn-lg">
                    <i class="fas fa-user-tie"></i>
                    Become a Partner
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    /* Custom styles for homepage */
    .hero {
        background-attachment: fixed;
    }
    
    @media (max-width: 768px) {
        .hero {
            background-attachment: scroll;
        }
        
        .hero-title {
            font-size: var(--text-5xl);
        }
        
        .grid-cols-3 {
            grid-template-columns: 1fr;
        }
        
        .grid-cols-4 {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 480px) {
        .grid-cols-4 {
            grid-template-columns: 1fr;
        }
    }
    
    /* Enhanced card hover effects */
    .card-property:hover .card-image img {
        transform: scale(1.08);
    }
    
    .card-property .card-overlay {
        opacity: 0;
        transition: var(--transition-smooth);
    }
    
    .card-property:hover .card-overlay {
        opacity: 1;
    }
    
    /* Breadcrumb styling */
    .breadcrumb {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(var(--blur-md));
        border-radius: var(--radius-xl);
        padding: var(--space-4) var(--space-8);
        margin: 0;
    }
    
    .breadcrumb-item {
        font-weight: var(--font-medium);
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
</style>
@endpush

@push('scripts')
<script>
    // Additional homepage-specific JavaScript
    document.addEventListener('DOMContentLoaded', function() {
        // Animate property cards on scroll
        const propertyCards = document.querySelectorAll('.card-property');
        
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
        
        const cardObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);
        
        propertyCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            cardObserver.observe(card);
        });
        
        // Enhanced parallax effect for hero
        let ticking = false;
        
        function updateParallax() {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            
            if (hero) {
                const speed = 0.5;
                hero.style.transform = `translateY(${scrolled * speed}px)`;
            }
            
            ticking = false;
        }
        
        function requestTick() {
            if (!ticking) {
                requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }
        
        window.addEventListener('scroll', requestTick);
    });
</script>
@endpush