<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Kingsbury Global Investment Limited - Premium Real Estate Solutions')</title>
    
    <meta name="description" content="@yield('description', 'Discover premium real estate solutions with Kingsbury Global Investment Limited. Your trusted partner for luxury properties, investment opportunities, and exceptional real estate services in Nigeria.')">
    <meta name="keywords" content="@yield('keywords', 'Nigerian real estate, Property for sale in Nigeria, Houses for rent in Lagos, Real estate agents in Nigeria, Property development in Nigeria, Affordable housing in Nigeria, Luxury apartments in Lagos, Commercial property for lease in Nigeria, Nigerian property market, Real estate investment in Nigeria, Property management in Nigeria, Estate agents in Lagos, Property valuation in Nigeria')">
    
    <!-- Favicons -->
    <link href="{{ asset('images/kingsbury_logo.png') }}" rel="icon" type="image/png">
    <link href="{{ asset('images/kingsbury_logo.png') }}" rel="apple-touch-icon">
    <link href="{{ asset('images/kingsbury_logo.png') }}" rel="shortcut icon" type="image/png">
    
    <!-- Additional favicon sizes for better compatibility -->
    <link href="{{ asset('images/kingsbury_logo.png') }}" rel="icon" sizes="16x16" type="image/png">
    <link href="{{ asset('images/kingsbury_logo.png') }}" rel="icon" sizes="32x32" type="image/png">
    <link href="{{ asset('images/kingsbury_logo.png') }}" rel="icon" sizes="96x96" type="image/png">
    <link href="{{ asset('images/kingsbury_logo.png') }}" rel="apple-touch-icon" sizes="180x180">
    
    <!-- Web App Manifest -->
    <meta name="theme-color" content="#202f4b">
    <meta name="msapplication-TileColor" content="#202f4b">
    <meta name="msapplication-TileImage" content="{{ asset('images/kingsbury_logo.png') }}">
    
    <!-- Preconnect to external domains -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Bootstrap CSS (for grid system only) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Modern Styles -->
    <link href="{{ asset('css/modern-styles.css') }}" rel="stylesheet">
    
    <!-- Vite Assets -->
    @vite(['resources/css/modern-design-system.css', 'resources/css/modern-components.css', 'resources/js/app.js'])
    
    <!-- Page-specific styles -->
    @stack('styles')
    
    <!-- Google Analytics -->
    @if(config('app.env') === 'production')
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16672755198"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'AW-16672755198');
    </script>
    @endif
</head>

<body class="@yield('body-class', '')">
    <!-- Loading Overlay -->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
    </div>
    
    <!-- Progress Bar -->
    <div class="progress-bar" id="progressBar"></div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between w-100">
                <!-- Brand -->
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img src="{{ asset('images/kingsbury_logo.png') }}" alt="Kingsbury Global" width="150" height="auto">
                </a>
                
                <!-- Desktop Navigation -->
                <ul class="navbar-nav d-none d-md-flex">
                    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                    <li class="nav-item"><a href="{{ url('property') }}" class="nav-link {{ request()->is('property') ? 'active' : '' }}">Houses</a></li>
                    <li class="nav-item"><a href="{{ url('land') }}" class="nav-link {{ request()->is('land') ? 'active' : '' }}">Land</a></li>
                    <li class="nav-item"><a href="#footer" class="nav-link">Contact</a></li>
                    <li class="nav-item"><a href="{{ url('agent') }}" class="nav-link {{ request()->is('agent') ? 'active' : '' }}">Partner With Us</a></li>
                </ul>
                
                <!-- Mobile Menu Toggle -->
                <button class="navbar-toggle d-md-none" id="mobileMenuToggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
            
            <!-- Mobile Navigation -->
            <ul class="navbar-nav d-md-none" id="mobileMenu">
                <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                <li class="nav-item"><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About Us</a></li>
                <li class="nav-item"><a href="{{ url('property') }}" class="nav-link {{ request()->is('property') ? 'active' : '' }}">Houses</a></li>
                <li class="nav-item"><a href="{{ url('land') }}" class="nav-link {{ request()->is('land') ? 'active' : '' }}">Land</a></li>
                <li class="nav-item"><a href="#footer" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="{{ url('agent') }}" class="nav-link {{ request()->is('agent') ? 'active' : '' }}">Partner With Us</a></li>
            </ul>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main>
        @yield('content')
    </main>
    
    <!-- Footer -->
    <footer class="footer" id="footer">
        <div class="container">
            <div class="row">
                <!-- Company Info -->
                <div class="col-lg-4 col-md-6 mb-8">
                    <div class="footer-section">
                        <h3 class="footer-title">Kingsbury Global Investment Limited</h3>
                        <p class="mb-6" style="color: rgba(255,255,255,0.8); font-style: italic;">
                            Where desire meets reality... Your trusted partner in premium real estate solutions.
                        </p>
                        
                        <div class="footer-contact-item">
                            <div class="footer-contact-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <p style="color: rgba(255,255,255,0.9); margin: 0;">No5, Opeloyeru street Ketu Lagos.</p>
                        </div>
                        
                        <div class="footer-contact-item">
                            <div class="footer-contact-icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <p style="color: rgba(255,255,255,0.9); margin: 0;">info@kingsburyglobal.com</p>
                        </div>
                        
                        <div class="footer-contact-item">
                            <div class="footer-contact-icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <p style="color: rgba(255,255,255,0.9); margin: 0;">+(234)-7048000779</p>
                        </div>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-8">
                    <div class="footer-section">
                        <h3 class="footer-title">Quick Links</h3>
                        <a href="{{ route('home') }}" class="footer-link">Home</a>
                        <a href="{{ route('about') }}" class="footer-link">About Us</a>
                        <a href="{{ url('property') }}" class="footer-link">Properties</a>
                        <a href="{{ url('land') }}" class="footer-link">Land</a>
                        <a href="{{ url('agent') }}" class="footer-link">Partner With Us</a>
                    </div>
                </div>
                
                <!-- Services -->
                <div class="col-lg-3 col-md-6 mb-8">
                    <div class="footer-section">
                        <h3 class="footer-title">Our Services</h3>
                        <a href="#" class="footer-link">Real Estate Brokerage</a>
                        <a href="#" class="footer-link">Property Development</a>
                        <a href="#" class="footer-link">Investment Advisory</a>
                        <a href="#" class="footer-link">Property Management</a>
                        <a href="#" class="footer-link">Consultation Services</a>
                    </div>
                </div>
                
                <!-- Social & Newsletter -->
                <div class="col-lg-3 col-md-6 mb-8">
                    <div class="footer-section">
                        <h3 class="footer-title">Stay Connected</h3>
                        <p style="color: rgba(255,255,255,0.8); margin-bottom: var(--space-6);">
                            Follow us on social media for the latest updates and property listings.
                        </p>
                        
                        <div class="social-links">
                            <a href="https://facebook.com/kingsbury" target="_blank" class="social-link">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://www.instagram.com/kingsburyglobal" target="_blank" class="social-link">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a href="https://www.linkedin.com/in/kingsbury-global-investment-limited-064b302b8" target="_blank" class="social-link">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="https://youtube.com/@kingsburyglobal?si=9skbUgBBrSvQDc0D" target="_blank" class="social-link">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row align-items-center">
                    <div class="col-md-6 text-center text-md-start">
                        <p class="footer-copyright mb-0">
                            &copy; {{ date('Y') }} <span style="color: var(--secondary-600);">Kingsbury Global Limited</span>. All Rights Reserved.
                        </p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <p class="footer-copyright mb-0">
                            Designed with <i class="fas fa-heart" style="color: var(--secondary-600);"></i> for Excellence
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <!-- Floating Action Buttons -->
    <a href="https://wa.me/2347048000779" target="_blank" class="floating-btn whatsapp-btn">
        <i class="fab fa-whatsapp fa-2x"></i>
    </a>
    
    <button class="floating-btn back-to-top" id="backToTop" style="bottom: 140px;">
        <i class="fas fa-chevron-up"></i>
    </button>
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Modern JavaScript -->
    <script>
        // Initialize AOS
        AOS.init({
            duration: 1000,
            easing: 'ease-out-cubic',
            once: true,
            offset: 100
        });
        
        // Loading overlay
        window.addEventListener('load', function() {
            const loadingOverlay = document.getElementById('loadingOverlay');
            if (loadingOverlay) {
                setTimeout(() => {
                    loadingOverlay.style.opacity = '0';
                    setTimeout(() => {
                        loadingOverlay.style.display = 'none';
                    }, 500);
                }, 800);
            }
        });
        
        // Progress bar
        window.addEventListener('scroll', function() {
            const progressBar = document.getElementById('progressBar');
            if (progressBar) {
                const scrollTop = window.pageYOffset;
                const docHeight = document.body.scrollHeight - window.innerHeight;
                const scrollPercent = (scrollTop / docHeight) * 100;
                progressBar.style.width = scrollPercent + '%';
            }
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (navbar) {
                if (window.scrollY > 50) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            }
        });
        
        // Mobile menu toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.getElementById('mobileMenu');
        
        if (mobileMenuToggle && mobileMenu) {
            mobileMenuToggle.addEventListener('click', function() {
                mobileMenu.classList.toggle('active');
                
                // Animate hamburger
                const spans = this.querySelectorAll('span');
                spans.forEach((span, index) => {
                    if (mobileMenu.classList.contains('active')) {
                        if (index === 0) span.style.transform = 'rotate(45deg) translate(5px, 5px)';
                        if (index === 1) span.style.opacity = '0';
                        if (index === 2) span.style.transform = 'rotate(-45deg) translate(7px, -6px)';
                    } else {
                        span.style.transform = 'none';
                        span.style.opacity = '1';
                    }
                });
            });
        }
        
        // Close mobile menu when clicking on links
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function() {
                if (mobileMenu && mobileMenu.classList.contains('active')) {
                    mobileMenu.classList.remove('active');
                    
                    // Reset hamburger
                    const spans = mobileMenuToggle.querySelectorAll('span');
                    spans.forEach(span => {
                        span.style.transform = 'none';
                        span.style.opacity = '1';
                    });
                }
            });
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offsetTop = target.offsetTop - 80; // Account for fixed navbar
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });
        
        // Back to top button
        const backToTop = document.getElementById('backToTop');
        if (backToTop) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    backToTop.classList.add('visible');
                } else {
                    backToTop.classList.remove('visible');
                }
            });
            
            backToTop.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
        
        // Counter animation
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
        const statsSection = document.querySelector('.stats-section');
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
        
        // Enhanced hover effects for cards
        document.querySelectorAll('.card, .card-property').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-12px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
        
        // Parallax effect for hero sections (subtle)
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.hero, .hero-bg');
            
            parallaxElements.forEach(element => {
                const speed = 0.3;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });
        
        // Form enhancements
        document.querySelectorAll('.form-input, .form-select, .form-textarea').forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
        
        // Lazy loading for images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });
            
            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    </script>
    
    <!-- Page-specific scripts -->
    @stack('scripts')
    
    <!-- Google Analytics Events -->
    @if(config('app.env') === 'production')
    <script>
        // Track button clicks
        document.querySelectorAll('.btn-primary, .btn-secondary').forEach(btn => {
            btn.addEventListener('click', function() {
                gtag('event', 'click', {
                    'event_category': 'engagement',
                    'event_label': this.textContent.trim()
                });
            });
        });
        
        // Track form submissions
        document.querySelectorAll('form').forEach(form => {
            form.addEventListener('submit', function() {
                gtag('event', 'form_submit', {
                    'event_category': 'engagement',
                    'event_label': this.id || 'form'
                });
            });
        });
    </script>
    @endif
</body>
</html>