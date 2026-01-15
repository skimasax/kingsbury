@extends('layouts.modern')

@section('title', 'Properties - Kingsbury Global Investment Limited')
@section('description', 'Browse our extensive collection of premium properties. Find your perfect home or investment opportunity with Kingsbury Global Investment Limited.')

@section('content')
<!-- Hero Section -->
<section class="hero" style="height: 60vh; background-image: linear-gradient(rgba(32, 47, 75, 0.8), rgba(26, 37, 47, 0.6)), url('{{ asset('images/amari/ABIJO_EXTERIOR_3A.jpg') }}');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title" style="font-size: var(--text-6xl);" data-aos="fade-up">
            Premium <span style="color: var(--secondary-600);">Properties</span>
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
            Discover exceptional homes and investment opportunities in prime locations across Nigeria
        </p>
        
        <!-- Search Bar -->
        <!-- <div class="mt-8" data-aos="fade-up" data-aos-delay="400">
            <div class="flex justify-center">
                <div class="bg-white rounded-2xl p-6 shadow-2xl max-w-4xl w-full">
                    <form class="flex flex-wrap gap-4 items-end">
                        <div class="flex-1 min-w-64">
                            <label class="form-label">Location</label>
                            <select class="form-select">
                                <option>All Locations</option>
                                <option>Lagos</option>
                                <option>Abuja</option>
                                <option>Port Harcourt</option>
                                <option>Kano</option>
                            </select>
                        </div>
                        <div class="flex-1 min-w-48">
                            <label class="form-label">Property Type</label>
                            <select class="form-select">
                                <option>All Types</option>
                                <option>Apartment</option>
                                <option>House</option>
                                <option>Villa</option>
                                <option>Duplex</option>
                            </select>
                        </div>
                        <div class="flex-1 min-w-48">
                            <label class="form-label">Price Range</label>
                            <select class="form-select">
                                <option>Any Price</option>
                                <option>₦5M - ₦10M</option>
                                <option>₦10M - ₦25M</option>
                                <option>₦25M - ₦50M</option>
                                <option>₦50M+</option>
                            </select>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-search"></i>
                                Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div> -->
    </div>
</section>

<!-- Properties Grid Section -->
<section class="section">
    <div class="container">
        <!-- Filter & Sort Bar -->
        <div class="d-flex flex-column flex-md-row align-items-center justify-content-between mb-4 p-3 p-md-4" style="background: #f8f9fa; border-radius: var(--border-radius);" data-aos="fade-up">
            <div class="d-flex flex-column flex-sm-row align-items-center gap-3 mb-3 mb-md-0">
                <span class="fw-medium text-muted">
                    Showing {{ count($data) }} properties
                </span>
                <div class="d-flex gap-2">
                    <button class="btn btn-sm btn-outline-primary" id="gridView">
                        <i class="fas fa-th"></i>
                    </button>
                    <button class="btn btn-sm btn-outline-secondary" id="listView">
                        <i class="fas fa-list"></i>
                    </button>
                </div>
            </div>
            
            <!-- <div class="d-flex flex-column flex-sm-row align-items-center gap-3">
                <label class="form-label mb-0 d-none d-sm-block">Sort by:</label>
                <select class="form-select" style="width: auto; min-width: 200px;">
                    <option>Latest</option>
                    <option>Price: Low to High</option>
                    <option>Price: High to Low</option>
                    <option>Most Popular</option>
                </select>
            </div> -->
        </div>
        
        <!-- Properties Grid -->
        <div class="row g-4" id="propertiesGrid">
            @if (count($data) > 0)
                @foreach ($data as $index => $property)
                <div class="col-lg-4 col-md-6 col-12" data-aos="fade-up" data-aos-delay="{{ ($index % 6 + 1) * 100 }}">
                    <div class="card-property h-100">
                        <div class="card-image">
                            <img src="{{ $property->images_1 }}" alt="{{ $property->property_name }}" loading="lazy">
                            <div class="price-badge">{{ $property->price }}</div>
                            
                            <!-- Property Type Badge -->
                            <div style="position: absolute; top: 1rem; left: 1rem; background: rgba(255,255,255,0.9); backdrop-filter: blur(10px); padding: 0.375rem 0.75rem; border-radius: 50px; font-size: 0.75rem; font-weight: 600; color: var(--primary-color);">
                                {{ $property->type }}
                            </div>
                            
                            <div class="card-overlay">
                                <div class="text-white text-center">
                                    <div class="d-flex gap-2 justify-content-center">
                                        <a href="{{ route('property.single', ['id' => $property->id]) }}" class="btn btn-primary btn-sm">
                                            <i class="fas fa-eye"></i>
                                            <span class="d-none d-sm-inline">View Details</span>
                                        </a>
                                        <button class="btn btn-outline-light btn-sm" onclick="shareProperty('{{ $property->property_name }}', '{{ route('property.single', ['id' => $property->id]) }}')">
                                            <i class="fas fa-share-alt"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-content">
                            <div class="d-flex align-items-start justify-content-between mb-3">
                                <h5 style="color: var(--primary-color); margin: 0; flex: 1; font-size: 1.1rem;">{{ $property->property_name }}</h5>
                                <button class="btn btn-sm p-1" style="background: none; border: none;">
                                    <i class="far fa-heart" style="color: var(--text-light);"></i>
                                </button>
                            </div>
                            
                            <p class="mb-3" style="color: var(--text-light); font-size: 0.9rem;">
                                <i class="fas fa-map-marker-alt" style="color: var(--secondary-color);"></i>
                                {{ $property->location }}
                            </p>
                            
                            <p class="mb-3" style="color: var(--text-light); font-size: 0.85rem;">
                                {{ $property->apartment_type }}
                            </p>
                            
                            <!-- Property Features -->
                            <div class="d-flex flex-wrap gap-3 mb-3" style="font-size: 0.8rem; color: var(--text-light);">
                                @if($property->feature_1)
                                <span><i class="fas fa-bed" style="color: var(--secondary-color);"></i> {{ $property->feature_1 }}</span>
                                @endif
                                @if($property->feature_2)
                                <span><i class="fas fa-bath" style="color: var(--secondary-color);"></i> {{ $property->feature_2 }}</span>
                                @endif
                                @if($property->feature_3)
                                <span class="d-none d-sm-inline"><i class="fas fa-car" style="color: var(--secondary-color);"></i> {{ $property->feature_3 }}</span>
                                @endif
                            </div>
                            
                            <div class="d-flex align-items-center justify-content-between">
                                <span style="font-weight: 700; color: var(--primary-color); font-size: 1.1rem;">{{ $property->price }}</span>
                                <a href="{{ route('property.single', ['id' => $property->id]) }}" class="btn btn-outline-primary btn-sm">
                                    <span class="d-none d-sm-inline">View Details</span>
                                    <span class="d-sm-none">View</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-12 text-center py-5">
                    <div class="mb-4">
                        <i class="fas fa-home" style="font-size: 4rem; color: var(--text-light); opacity: 0.5;"></i>
                    </div>
                    <h3 style="color: var(--text-light); margin-bottom: 1rem;">No Properties Found</h3>
                    <p style="color: var(--text-light); margin-bottom: 2rem;">
                        We couldn't find any properties matching your criteria. Try adjusting your search filters.
                    </p>
                    <a href="{{ route('home') }}" class="btn btn-primary">
                        <i class="fas fa-arrow-left"></i>
                        Back to Home
                    </a>
                </div>
            @endif
        </div>
        
        <!-- Pagination -->
        @if (count($data) > 12)
        <div class="flex justify-center mt-16" data-aos="fade-up">
            <nav class="flex gap-2">
                <button class="btn btn-outline">
                    <i class="fas fa-chevron-left"></i>
                    Previous
                </button>
                <button class="btn btn-primary">1</button>
                <button class="btn btn-outline">2</button>
                <button class="btn btn-outline">3</button>
                <span class="flex items-center px-4 text-neutral-500">...</span>
                <button class="btn btn-outline">10</button>
                <button class="btn btn-outline">
                    Next
                    <i class="fas fa-chevron-right"></i>
                </button>
            </nav>
        </div>
        @endif
    </div>
</section>

<!-- Call to Action Section -->
<section class="section" style="background: var(--gradient-primary);">
    <div class="container">
        <div class="text-center text-white" data-aos="fade-up">
            <h2 style="color: var(--neutral-0); margin-bottom: var(--space-4);">Didn't Find What You're Looking For?</h2>
            <p style="color: rgba(255,255,255,0.9); font-size: var(--text-lg); margin-bottom: var(--space-8); max-width: 600px; margin-left: auto; margin-right: auto;">
                Our expert team can help you find the perfect property that matches your specific requirements and budget.
            </p>
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="{{ url('agent') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-user-tie"></i>
                    Speak to an Agent
                </a>
                <a href="#footer" class="btn btn-ghost btn-lg">
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
    /* Property Grid Specific Styles */
    .card-property {
        background: var(--white);
        border-radius: var(--border-radius);
        box-shadow: var(--shadow-lg);
        overflow: hidden;
        transition: var(--transition);
        border: none;
    }
    
    .card-property:hover {
        transform: translateY(-8px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
    }
    
    .card-image {
        position: relative;
        height: 250px;
        overflow: hidden;
    }
    
    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: var(--transition);
    }
    
    .card-property:hover .card-image img {
        transform: scale(1.05);
    }
    
    .price-badge {
        position: absolute;
        top: 1rem;
        right: 1rem;
        background: linear-gradient(135deg, var(--secondary-color) 0%, #e6b800 100%);
        color: var(--primary-color);
        padding: 0.5rem 1rem;
        border-radius: 50px;
        font-weight: 700;
        font-size: 0.9rem;
        box-shadow: 0 4px 15px rgba(244, 194, 3, 0.3);
        z-index: 2;
    }
    
    .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, rgba(32, 47, 75, 0.9) 0%, rgba(26, 37, 47, 0.8) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: var(--transition);
        padding: 2rem;
        z-index: 1;
    }
    
    .card-property:hover .card-overlay {
        opacity: 1;
    }
    
    .card-content {
        padding: 1.5rem;
    }
    
    .wishlist-btn:hover,
    .wishlist-btn-small:hover {
        background: var(--secondary-color) !important;
        transform: scale(1.1);
    }
    
    .wishlist-btn:hover i,
    .wishlist-btn-small:hover i {
        color: var(--primary-color) !important;
    }
    
    .wishlist-btn.active i,
    .wishlist-btn-small.active i {
        color: var(--error-500) !important;
    }
    
    /* List View Styles */
    .row.g-3 .card-property {
        display: flex !important;
        flex-direction: row !important;
        margin-bottom: 1.5rem;
    }
    
    .row.g-3 .card-image {
        width: 300px !important;
        height: 200px !important;
        flex-shrink: 0 !important;
    }
    
    .row.g-3 .card-content {
        flex: 1 !important;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    
    .row.g-3 .card-overlay {
        display: none !important;
    }
    
    /* Mobile Responsive */
    @media (max-width: 1024px) {
        .grid-cols-3 {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media (max-width: 768px) {
        .grid-cols-3 {
            grid-template-columns: 1fr;
        }
        
        .hero {
            height: 50vh;
        }
        
        .hero-title {
            font-size: 2rem !important;
        }
        
        .hero-subtitle {
            font-size: 1rem;
        }
        
        .hero-content {
            padding: 0 1rem;
        }
        
        .hero-content .bg-white {
            margin: 0 var(--space-4);
        }
        
        .hero-content form {
            flex-direction: column;
        }
        
        .hero-content form > div {
            width: 100%;
        }
        
        .properties-list .card-property {
            flex-direction: column;
        }
        
        .properties-list .card-image {
            width: 100%;
            height: 200px;
        }
        
        /* Filter bar responsive */
        .section .flex.items-center.justify-between {
            flex-direction: column;
            gap: 1rem;
            align-items: stretch;
        }
        
        .section .flex.items-center.justify-between > div {
            justify-content: center;
        }
        
        /* Card responsive adjustments */
        .card-property {
            margin-bottom: 1.5rem;
        }
        
        .card-image {
            height: 200px;
        }
        
        .price-badge {
            top: 0.75rem;
            right: 0.75rem;
            padding: 0.375rem 0.75rem;
            font-size: 0.8rem;
        }
        
        .card-content {
            padding: 1.25rem;
        }
        
        .card-overlay {
            padding: 1.5rem;
        }
        
        /* Button adjustments */
        .btn {
            padding: 0.75rem 1.5rem;
            font-size: 0.9rem;
        }
        
        .btn-sm {
            padding: 0.5rem 1rem;
            font-size: 0.8rem;
        }
    }
    
    @media (max-width: 576px) {
        .hero {
            height: 60vh;
        }
        
        .hero-title {
            font-size: 1.75rem !important;
        }
        
        .card-image {
            height: 180px;
        }
        
        .price-badge {
            top: 0.5rem;
            right: 0.5rem;
            padding: 0.25rem 0.5rem;
            font-size: 0.75rem;
        }
        
        .card-content {
            padding: 1rem;
        }
        
        .card-overlay {
            padding: 1rem;
        }
        
        /* Typography mobile */
        h1 { font-size: 1.5rem; }
        h2 { font-size: 1.25rem; }
        h3 { font-size: 1.125rem; }
        h4 { font-size: 1rem; }
        h5 { font-size: 0.9rem; }
        
        /* Spacing mobile */
        .section {
            padding: 2rem 0;
        }
        
        .mb-4 { margin-bottom: 1rem; }
        .mb-6 { margin-bottom: 1.5rem; }
        .mb-8 { margin-bottom: 2rem; }
        .p-6 { padding: 1rem; }
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // View toggle functionality
        const gridView = document.getElementById('gridView');
        const listView = document.getElementById('listView');
        const propertiesGrid = document.getElementById('propertiesGrid');
        
        if (gridView && listView && propertiesGrid) {
            gridView.addEventListener('click', function() {
                propertiesGrid.className = 'row g-4';
                gridView.className = 'btn btn-sm btn-outline-primary';
                listView.className = 'btn btn-sm btn-outline-secondary';
                
                // Update individual cards
                const cards = propertiesGrid.querySelectorAll('.col-lg-4');
                cards.forEach(card => {
                    card.className = 'col-lg-4 col-md-6 col-12';
                });
            });
            
            listView.addEventListener('click', function() {
                propertiesGrid.className = 'row g-3';
                listView.className = 'btn btn-sm btn-outline-primary';
                gridView.className = 'btn btn-sm btn-outline-secondary';
                
                // Update individual cards for list view
                const cards = propertiesGrid.querySelectorAll('.col-lg-4, .col-md-6, .col-12');
                cards.forEach(card => {
                    card.className = 'col-12';
                    const cardProperty = card.querySelector('.card-property');
                    if (cardProperty) {
                        cardProperty.style.display = 'flex';
                        cardProperty.style.flexDirection = 'row';
                        const cardImage = cardProperty.querySelector('.card-image');
                        const cardContent = cardProperty.querySelector('.card-content');
                        if (cardImage) {
                            cardImage.style.width = '300px';
                            cardImage.style.height = '200px';
                            cardImage.style.flexShrink = '0';
                        }
                        if (cardContent) {
                            cardContent.style.flex = '1';
                        }
                    }
                });
            });
        }
        
        // Wishlist functionality
        document.querySelectorAll('.wishlist-btn, .wishlist-btn-small').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
                
                const icon = this.querySelector('i');
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    this.classList.add('active');
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    this.classList.remove('active');
                }
            });
        });
        
        // Enhanced property card animations
        const propertyCards = document.querySelectorAll('.card-property');
        
        propertyCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-12px)';
                this.style.boxShadow = 'var(--shadow-2xl)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'var(--shadow-lg)';
            });
        });
        
        // Search form enhancement
        const searchForm = document.querySelector('.hero-content form');
        if (searchForm) {
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Add loading state
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Searching...';
                submitBtn.disabled = true;
                
                // Simulate search (replace with actual search logic)
                setTimeout(() => {
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 2000);
            });
        }
        
        // Infinite scroll (optional)
        let loading = false;
        window.addEventListener('scroll', function() {
            if (loading) return;
            
            if (window.innerHeight + window.scrollY >= document.body.offsetHeight - 1000) {
                loading = true;
                
                // Simulate loading more properties
                setTimeout(() => {
                    loading = false;
                }, 1000);
            }
        });
    });
    
    // Share property function
    function shareProperty(propertyName, propertyUrl) {
        if (navigator.share) {
            navigator.share({
                title: propertyName,
                text: `Check out this amazing property: ${propertyName}`,
                url: propertyUrl
            });
        } else {
            // Fallback to copying URL
            navigator.clipboard.writeText(propertyUrl).then(() => {
                // Show toast notification
                showToast('Property link copied to clipboard!');
            });
        }
    }
    
    // Simple toast notification
    function showToast(message) {
        const toast = document.createElement('div');
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--success-600);
            color: white;
            padding: 12px 24px;
            border-radius: 8px;
            z-index: 10000;
            animation: slideInRight 0.3s ease;
        `;
        toast.textContent = message;
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.style.animation = 'slideOutRight 0.3s ease';
            setTimeout(() => {
                document.body.removeChild(toast);
            }, 300);
        }, 3000);
    }
    
    // Add CSS for toast animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes slideInRight {
            from { transform: translateX(100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
        @keyframes slideOutRight {
            from { transform: translateX(0); opacity: 1; }
            to { transform: translateX(100%); opacity: 0; }
        }
    `;
    document.head.appendChild(style);
</script>
@endpush