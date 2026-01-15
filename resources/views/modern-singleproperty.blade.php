@extends('layouts.modern')

@section('title', $data->property_name . ' - Kingsbury Global Investment Limited')
@section('description', 'Discover this premium property: ' . $data->property_name . ' in ' . $data->location . '. ' . substr($data->description ?? '', 0, 150))

@section('content')
<!-- Property Hero Section -->
<section class="property-hero" style="padding-top: 100px; background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">
    <div class="container">
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb" class="mb-4" data-aos="fade-up">
            <div class="breadcrumb-modern">
                <a href="{{ route('home') }}" class="breadcrumb-link">
                    <i class="fas fa-home"></i>Home
                </a>
                <i class="fas fa-chevron-right breadcrumb-separator"></i>
                <a href="{{ url('property') }}" class="breadcrumb-link">Properties</a>
                <i class="fas fa-chevron-right breadcrumb-separator"></i>
                <span class="breadcrumb-current">{{ Str::limit($data->property_name, 30) }}</span>
            </div>
        </nav>
        
        <!-- Property Header -->
        <div class="row align-items-center mb-5" data-aos="fade-up">
            <div class="col-lg-8 col-12 mb-3 mb-lg-0">
                <div class="property-badges mb-3">
                    <span class="badge badge-type">{{ $data->type }}</span>
                    <span class="badge badge-category">{{ $data->apartment_type }}</span>
                    <span class="badge badge-status">Available</span>
                </div>
                
                <h1 class="property-title">{{ $data->property_name }}</h1>
                
                <div class="property-meta">
                    <div class="meta-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>{{ $data->location }}</span>
                    </div>
                   
                   
                </div>
                
               
                
                <div class="property-price">
                    <div class="price-main">{{ $data->price }}</div>
                 
                </div>
            </div>
            
            <div class="col-lg-4 col-12">
                <div class="property-actions">
                    <button class="action-btn primary" onclick="scrollToContact()">
                        <i class="fas fa-phone"></i>
                        <span>Contact Agent</span>
                    </button>
                    <!-- <button class="action-btn secondary wishlist-btn">
                        <i class="far fa-heart"></i>
                        <span class="d-none d-sm-inline">Save Property</span>
                    </button> -->
                    <button class="action-btn secondary" onclick="shareProperty()">
                        <i class="fas fa-share-alt"></i>
                        <span class="d-none d-sm-inline">Share</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Property Gallery -->
<section class="property-gallery mb-5">
    <div class="container">
        <div class="gallery-container" data-aos="fade-up">
            <div class="row g-3">
                <!-- Main Image -->
                <div class="col-lg-8 col-12">
                    <div class="main-image" onclick="openGallery(0)">
                        <img src="{{ $data->images_1 }}" alt="{{ $data->property_name }}" class="img-fluid">
                        <div class="image-overlay">
                            <div class="overlay-content">
                                <i class="fas fa-expand-alt"></i>
                                <span>View Gallery</span>
                            </div>
                        </div>
                        <div class="image-count">
                            <i class="fas fa-images"></i>
                            <span>{{ collect([$data->images_1, $data->images_2, $data->images_3, $data->images_4, $data->images_5])->filter()->count() }} Photos</span>
                        </div>
                    </div>
                </div>
                
                <!-- Thumbnail Images -->
                <div class="col-lg-4 col-12">
                    <div class="row g-3 h-100">
                        @if($data->images_2)
                        <div class="col-6 col-lg-12">
                            <div class="thumbnail-image" onclick="openGallery(1)">
                                <img src="{{ $data->images_2 }}" alt="{{ $data->property_name }}" class="img-fluid">
                            </div>
                        </div>
                        @endif
                        
                        @if($data->images_3)
                        <div class="col-6 col-lg-12">
                            <div class="thumbnail-image" onclick="openGallery(2)">
                                <img src="{{ $data->images_3 }}" alt="{{ $data->property_name }}" class="img-fluid">
                                @if($data->images_4 || $data->images_5)
                                <div class="more-images">
                                    <span>+{{ collect([$data->images_4, $data->images_5])->filter()->count() }} more</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Property Details -->
<section class="property-details mb-5">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8 col-12 mb-4 mb-lg-0">
                <!-- Property Features -->
                <div class="details-card" data-aos="fade-up">
                    <h3 class="card-title">Property Features</h3>
                    <div class="features-grid">
                        @if($data->feature_1)
                        <div class="feature-item">
                            <i class="fas fa-bed"></i>
                            <span>{{ $data->feature_1 }}</span>
                        </div>
                        @endif
                        @if($data->feature_2)
                        <div class="feature-item">
                            <i class="fas fa-bath"></i>
                            <span>{{ $data->feature_2 }}</span>
                        </div>
                        @endif
                        @if($data->feature_3)
                        <div class="feature-item">
                            <i class="fas fa-car"></i>
                            <span>{{ $data->feature_3 }}</span>
                        </div>
                        @endif
                        @if($data->feature_4)
                        <div class="feature-item">
                            <i class="fas fa-home"></i>
                            <span>{{ $data->feature_4 }}</span>
                        </div>
                        @endif
                        @if($data->feature_5)
                        <div class="feature-item">
                            <i class="fas fa-tree"></i>
                            <span>{{ $data->feature_5 }}</span>
                        </div>
                        @endif
                        @if($data->feature_6)
                        <div class="feature-item">
                            <i class="fas fa-swimming-pool"></i>
                            <span>{{ $data->feature_6 }}</span>
                        </div>
                        @endif
                    </div>
                </div>

                <!-- Description -->
                @if($data->description)
                <div class="details-card" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="card-title">About This Property</h3>
                    <div class="property-description">
                        <p>{{ $data->description }}</p>
                    </div>
                </div>
                @endif

                <!-- Nearby Landmarks -->
                @if($data->landmark_1 || $data->landmark_2 || $data->landmark_3)
                <div class="details-card" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="card-title">Nearby Landmarks</h3>
                    <div class="landmarks-list">
                        @if($data->landmark_1)
                        <div class="landmark-item">
                            <i class="fas fa-map-pin"></i>
                            <span>{{ $data->landmark_1 }}</span>
                        </div>
                        @endif
                        @if($data->landmark_2)
                        <div class="landmark-item">
                            <i class="fas fa-map-pin"></i>
                            <span>{{ $data->landmark_2 }}</span>
                        </div>
                        @endif
                        @if($data->landmark_3)
                        <div class="landmark-item">
                            <i class="fas fa-map-pin"></i>
                            <span>{{ $data->landmark_3 }}</span>
                        </div>
                        @endif
                        @if($data->landmark_4)
                        <div class="landmark-item">
                            <i class="fas fa-map-pin"></i>
                            <span>{{ $data->landmark_4 }}</span>
                        </div>
                        @endif
                    </div>
                </div>
                @endif
            </div>
            
            <!-- Sidebar -->
            <div class="col-lg-4 col-12">
                <!-- Contact Form -->
                <div class="contact-card sticky-top" id="contact" data-aos="fade-up">
                    <div class="card-header">
                        <h4>Interested in this property?</h4>
                        <p>Get in touch with our expert agents</p>
                    </div>
                    
                    <form action="{{ route('property-enquiry') }}" method="POST" class="contact-form">
                        @csrf
                        <input type="hidden" name="property_id" value="{{ $data->id }}">
                        
                        <div class="form-group">
                            <label for="customer_name">Full Name</label>
                            <input type="text" id="customer_name" name="customer_name" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="contact">Phone Number</label>
                            <input type="tel" id="contact" name="contact" class="form-control" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" rows="4" placeholder="I'm interested in this property. Please contact me with more details."></textarea>
                        </div>
                        
                        <button type="submit" class="btn-submit">
                            <i class="fas fa-paper-plane"></i>
                            Send Enquiry
                        </button>
                    </form>
                    
                    <div class="contact-info">
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <span class="label">Call Us</span>
                                <span class="value">+(234)-7048000779</span>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <span class="label">Email</span>
                                <span class="value">info@kingsburyglobal.com</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property Summary -->
                <div class="summary-card" data-aos="fade-up" data-aos-delay="100">
                    <h4>Property Summary</h4>
                    <div class="summary-list">
                        <div class="summary-item">
                            <span class="label">Property Type</span>
                            <span class="value">{{ $data->type }}</span>
                        </div>
                        <div class="summary-item">
                            <span class="label">Category</span>
                            <span class="value">{{ $data->apartment_type }}</span>
                        </div>
                        <div class="summary-item">
                            <span class="label">Location</span>
                            <span class="value">{{ $data->location }}</span>
                        </div>
                        <div class="summary-item">
                            <span class="label">Title</span>
                            <span class="value">{{ $data->title }}</span>
                        </div>
                        <div class="summary-item">
                            <span class="label">Governor's Consent</span>
                            <span class="value">{{ $data->governors_consent }}</span>
                        </div>
                        @if($data->payment_plan)
                        <div class="summary-item">
                            <span class="label">Payment Plan</span>
                            <span class="value">{{ $data->payment_plan }}</span>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Modal -->
<div class="gallery-modal" id="galleryModal">
    <div class="modal-content">
        <button class="close-btn" onclick="closeGallery()">
            <i class="fas fa-times"></i>
        </button>
        
        <div class="gallery-main">
            <button class="nav-btn prev" onclick="previousImage()">
                <i class="fas fa-chevron-left"></i>
            </button>
            
            <img id="galleryImage" src="" alt="Property Image">
            
            <button class="nav-btn next" onclick="nextImage()">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
        
        <div class="gallery-thumbnails" id="galleryThumbnails"></div>
    </div>
</div>
@endsection

@push('styles')
<style>
/* Single Property Page Styles */
.property-hero {
    padding: 2rem 0;
}

/* Breadcrumb Styles */
.breadcrumb-modern {
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(15px);
    border-radius: 50px;
    padding: 12px 24px;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    border: 1px solid rgba(32, 47, 75, 0.1);
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

.breadcrumb-modern:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
}

.breadcrumb-link {
    color: var(--text-light);
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 0.9rem;
}

.breadcrumb-link:hover {
    color: var(--primary-color);
    transform: translateY(-1px);
}

.breadcrumb-separator {
    color: var(--text-light);
    font-size: 0.7rem;
    opacity: 0.6;
}

.breadcrumb-current {
    color: var(--primary-color);
    font-weight: 600;
    font-size: 0.9rem;
}

/* Property Header Styles */
.property-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
}

.badge {
    padding: 0.5rem 1rem;
    border-radius: 50px;
    font-size: 0.8rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.badge-type {
    background: linear-gradient(135deg, var(--secondary-color) 0%, #e6b800 100%);
    color: var(--primary-color);
}

.badge-category {
    background: rgba(32, 47, 75, 0.1);
    color: var(--primary-color);
}

.badge-status {
    background: linear-gradient(135deg, #10b981 0%, #059669 100%);
    color: white;
}

.property-title {
    font-size: clamp(2rem, 5vw, 3.5rem);
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
    line-height: 1.2;
}

.property-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    margin-bottom: 2rem;
}

.meta-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--text-light);
    font-size: 0.95rem;
}

.meta-item i {
    color: var(--secondary-color);
    font-size: 1rem;
}

.property-price {
    margin-bottom: 1rem;
}

.price-main {
    font-size: 3rem;
    font-weight: 700;
    color: var(--primary-color);
    line-height: 1;
}

.price-full {
    font-size: 1rem;
    color: var(--text-light);
    margin-top: 0.5rem;
}

/* Action Buttons */
.property-actions {
    display: flex;
    flex-direction: column;
    gap: 0.75rem;
}

.action-btn {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    padding: 1rem 1.5rem;
    border-radius: var(--border-radius);
    font-weight: 600;
    text-decoration: none;
    transition: var(--transition);
    border: none;
    cursor: pointer;
    font-size: 0.95rem;
}

.action-btn.primary {
    background: linear-gradient(135deg, var(--secondary-color) 0%, #e6b800 100%);
    color: var(--primary-color);
    box-shadow: 0 8px 25px rgba(244, 194, 3, 0.3);
}

.action-btn.primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 35px rgba(244, 194, 3, 0.4);
}

.action-btn.secondary {
    background: rgba(32, 47, 75, 0.1);
    color: var(--primary-color);
    border: 2px solid rgba(32, 47, 75, 0.2);
}

.action-btn.secondary:hover {
    background: rgba(32, 47, 75, 0.15);
    transform: translateY(-2px);
}

/* Gallery Styles */
.gallery-container {
    border-radius: var(--border-radius);
    overflow: hidden;
    box-shadow: var(--shadow-lg);
}

.main-image {
    position: relative;
    height: 400px;
    border-radius: var(--border-radius);
    overflow: hidden;
    cursor: pointer;
    transition: var(--transition);
}

.main-image:hover {
    transform: translateY(-4px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
}

.main-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
}

.main-image:hover img {
    transform: scale(1.05);
}

.image-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(32, 47, 75, 0.8) 0%, rgba(26, 37, 47, 0.6) 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    opacity: 0;
    transition: var(--transition);
}

.main-image:hover .image-overlay {
    opacity: 1;
}

.overlay-content {
    color: white;
    text-align: center;
    font-weight: 600;
}

.overlay-content i {
    font-size: 2rem;
    margin-bottom: 0.5rem;
    display: block;
}

.image-count {
    position: absolute;
    bottom: 1rem;
    left: 1rem;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
    padding: 0.5rem 1rem;
    border-radius: 50px;
    color: var(--primary-color);
    font-weight: 600;
    font-size: 0.85rem;
}

.image-count i {
    margin-right: 0.5rem;
}

.thumbnail-image {
    position: relative;
    height: 180px;
    border-radius: var(--border-radius);
    overflow: hidden;
    cursor: pointer;
    transition: var(--transition);
}

.thumbnail-image:hover {
    transform: translateY(-2px);
    box-shadow: var(--shadow-lg);
}

.thumbnail-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: var(--transition);
}

.thumbnail-image:hover img {
    transform: scale(1.05);
}

.more-images {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 600;
}

/* Details Cards */
.details-card {
    background: white;
    border-radius: var(--border-radius);
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: var(--shadow-lg);
    border: 1px solid rgba(32, 47, 75, 0.05);
    transition: var(--transition);
}

.details-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 25px 50px rgba(0, 0, 0, 0.1);
}

.card-title {
    font-size: 1.5rem;
    font-weight: 700;
    color: var(--primary-color);
    margin-bottom: 1.5rem;
    position: relative;
    padding-bottom: 0.75rem;
}

.card-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 60px;
    height: 3px;
    background: linear-gradient(135deg, var(--secondary-color) 0%, #e6b800 100%);
    border-radius: 2px;
}

/* Features Grid */
.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 1.5rem;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    padding: 1rem;
    background: rgba(32, 47, 75, 0.03);
    border-radius: var(--border-radius);
    transition: var(--transition);
}

.feature-item:hover {
    background: rgba(32, 47, 75, 0.08);
    transform: translateY(-2px);
}

.feature-item i {
    width: 40px;
    height: 40px;
    background: linear-gradient(135deg, var(--secondary-color) 0%, #e6b800 100%);
    color: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.1rem;
    flex-shrink: 0;
}

.feature-item span {
    font-weight: 600;
    color: var(--primary-color);
}

/* Property Description */
.property-description p {
    color: var(--text-light);
    line-height: 1.8;
    font-size: 1.05rem;
}

/* Landmarks */
.landmarks-list {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1rem;
}

.landmark-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem;
    background: rgba(244, 194, 3, 0.05);
    border-radius: var(--border-radius);
    border-left: 4px solid var(--secondary-color);
}

.landmark-item i {
    color: var(--secondary-color);
    font-size: 1rem;
}

.landmark-item span {
    color: var(--primary-color);
    font-weight: 500;
}

/* Contact Card */
.contact-card {
    background: white;
    border-radius: var(--border-radius);
    padding: 2rem;
    margin-bottom: 2rem;
    box-shadow: var(--shadow-lg);
    border: 1px solid rgba(32, 47, 75, 0.05);
    top: 120px;
}

.contact-card .card-header {
    text-align: center;
    margin-bottom: 2rem;
}

.contact-card .card-header h4 {
    color: var(--primary-color);
    font-weight: 700;
    margin-bottom: 0.5rem;
}

.contact-card .card-header p {
    color: var(--text-light);
    margin: 0;
}

/* Form Styles */
.contact-form .form-group {
    margin-bottom: 1.5rem;
}

.contact-form label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 600;
    color: var(--primary-color);
    font-size: 0.9rem;
}

.contact-form .form-control {
    width: 100%;
    padding: 1rem;
    border: 2px solid rgba(32, 47, 75, 0.1);
    border-radius: var(--border-radius);
    font-size: 1rem;
    transition: var(--transition);
    background: white;
}

.contact-form .form-control:focus {
    outline: none;
    border-color: var(--secondary-color);
    box-shadow: 0 0 0 3px rgba(244, 194, 3, 0.1);
}

.btn-submit {
    width: 100%;
    padding: 1rem 2rem;
    background: linear-gradient(135deg, var(--secondary-color) 0%, #e6b800 100%);
    color: var(--primary-color);
    border: none;
    border-radius: var(--border-radius);
    font-weight: 600;
    font-size: 1rem;
    cursor: pointer;
    transition: var(--transition);
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    margin-bottom: 2rem;
}

.btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 35px rgba(244, 194, 3, 0.4);
}

/* Contact Info */
.contact-info {
    border-top: 1px solid rgba(32, 47, 75, 0.1);
    padding-top: 1.5rem;
}

.info-item {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.info-item i {
    width: 40px;
    height: 40px;
    background: rgba(32, 47, 75, 0.1);
    color: var(--primary-color);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.info-item .label {
    display: block;
    font-size: 0.8rem;
    color: var(--text-light);
    font-weight: 500;
}

.info-item .value {
    display: block;
    font-weight: 600;
    color: var(--primary-color);
}

/* Summary Card */
.summary-card {
    background: white;
    border-radius: var(--border-radius);
    padding: 2rem;
    box-shadow: var(--shadow-lg);
    border: 1px solid rgba(32, 47, 75, 0.05);
}

.summary-card h4 {
    color: var(--primary-color);
    font-weight: 700;
    margin-bottom: 1.5rem;
    text-align: center;
}

.summary-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.summary-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.75rem 0;
    border-bottom: 1px solid rgba(32, 47, 75, 0.1);
}

.summary-item:last-child {
    border-bottom: none;
}

.summary-item .label {
    font-weight: 500;
    color: var(--text-light);
    font-size: 0.9rem;
}

.summary-item .value {
    font-weight: 600;
    color: var(--primary-color);
    text-align: right;
    font-size: 0.9rem;
}

/* Gallery Modal */
.gallery-modal {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.95);
    z-index: 10000;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 2rem;
}

.gallery-modal.active {
    display: flex;
}

.modal-content {
    max-width: 90vw;
    max-height: 90vh;
    position: relative;
}

.close-btn {
    position: absolute;
    top: -50px;
    right: 0;
    background: rgba(255, 255, 255, 0.2);
    border: none;
    color: white;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1.2rem;
    z-index: 10001;
}

.gallery-main {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
}

.gallery-main img {
    max-width: 80vw;
    max-height: 70vh;
    object-fit: contain;
    border-radius: var(--border-radius);
}

.nav-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.2);
    border: none;
    color: white;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    cursor: pointer;
    font-size: 1.5rem;
    transition: var(--transition);
}

.nav-btn:hover {
    background: rgba(255, 255, 255, 0.3);
}

.nav-btn.prev {
    left: -70px;
}

.nav-btn.next {
    right: -70px;
}

.gallery-thumbnails {
    display: flex;
    justify-content: center;
    gap: 1rem;
    margin-top: 2rem;
    flex-wrap: wrap;
}

.gallery-thumbnails img {
    width: 80px;
    height: 60px;
    object-fit: cover;
    border-radius: 8px;
    cursor: pointer;
    border: 2px solid transparent;
    transition: var(--transition);
}

.gallery-thumbnails img:hover,
.gallery-thumbnails img.active {
    border-color: var(--secondary-color);
}

/* Mobile Responsive */
@media (max-width: 992px) {
    .property-actions {
        flex-direction: row;
        flex-wrap: wrap;
    }
    
    .action-btn {
        flex: 1;
        min-width: 120px;
    }
    
    .contact-card {
        position: static !important;
        top: auto !important;
    }
}

@media (max-width: 768px) {
    .property-hero {
        padding: 1.5rem 0;
    }
    
    .breadcrumb-modern {
        padding: 8px 16px;
        font-size: 0.85rem;
    }
    
    .property-title {
        font-size: 2rem;
        margin-bottom: 1rem;
    }
    
    .property-meta {
        flex-direction: column;
        gap: 0.75rem;
        margin-bottom: 1.5rem;
    }
    
    .price-main {
        font-size: 2.5rem;
    }
    
    .property-actions {
        flex-direction: column;
        gap: 0.5rem;
    }
    
    .action-btn span {
        display: none;
    }
    
    .main-image {
        height: 300px;
    }
    
    .thumbnail-image {
        height: 140px;
    }
    
    .details-card {
        padding: 1.5rem;
        margin-bottom: 1.5rem;
    }
    
    .features-grid {
        grid-template-columns: 1fr;
        gap: 1rem;
    }
    
    .landmarks-list {
        grid-template-columns: 1fr;
    }
    
    .contact-card {
        padding: 1.5rem;
    }
    
    .nav-btn.prev {
        left: -40px;
    }
    
    .nav-btn.next {
        right: -40px;
    }
}

@media (max-width: 576px) {
    .property-badges {
        gap: 0.5rem;
    }
    
    .badge {
        padding: 0.375rem 0.75rem;
        font-size: 0.75rem;
    }
    
    .property-title {
        font-size: 1.75rem;
    }
    
    .price-main {
        font-size: 2rem;
    }
    
    .main-image {
        height: 250px;
    }
    
    .thumbnail-image {
        height: 120px;
    }
    
    .details-card {
        padding: 1.25rem;
    }
    
    .card-title {
        font-size: 1.25rem;
    }
    
    .feature-item {
        padding: 0.75rem;
    }
    
    .feature-item i {
        width: 35px;
        height: 35px;
        font-size: 1rem;
    }
    
    .contact-card {
        padding: 1.25rem;
    }
    
    .gallery-modal {
        padding: 1rem;
    }
    
    .nav-btn {
        width: 40px;
        height: 40px;
        font-size: 1.2rem;
    }
    
    .nav-btn.prev {
        left: -25px;
    }
    
    .nav-btn.next {
        right: -25px;
    }
    
    .gallery-thumbnails img {
        width: 60px;
        height: 45px;
    }
}
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Gallery functionality
    const galleryImages = [
        '{{ $data->images_1 }}',
        @if($data->images_2) '{{ $data->images_2 }}', @endif
        @if($data->images_3) '{{ $data->images_3 }}', @endif
        @if($data->images_4) '{{ $data->images_4 }}', @endif
        @if($data->images_5) '{{ $data->images_5 }}' @endif
    ].filter(img => img);
    
    let currentImageIndex = 0;
    
    window.openGallery = function(index) {
        currentImageIndex = index;
        const modal = document.getElementById('galleryModal');
        const image = document.getElementById('galleryImage');
        
        image.src = galleryImages[currentImageIndex];
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
        
        createThumbnails();
    }
    
    window.closeGallery = function() {
        const modal = document.getElementById('galleryModal');
        modal.classList.remove('active');
        document.body.style.overflow = 'auto';
    }
    
    window.nextImage = function() {
        currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
        document.getElementById('galleryImage').src = galleryImages[currentImageIndex];
        updateThumbnails();
    }
    
    window.previousImage = function() {
        currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
        document.getElementById('galleryImage').src = galleryImages[currentImageIndex];
        updateThumbnails();
    }
    
    function createThumbnails() {
        const container = document.getElementById('galleryThumbnails');
        container.innerHTML = '';
        
        galleryImages.forEach((img, index) => {
            const thumb = document.createElement('img');
            thumb.src = img;
            thumb.className = index === currentImageIndex ? 'active' : '';
            thumb.onclick = () => {
                currentImageIndex = index;
                document.getElementById('galleryImage').src = galleryImages[currentImageIndex];
                updateThumbnails();
            };
            container.appendChild(thumb);
        });
    }
    
    function updateThumbnails() {
        const thumbnails = document.querySelectorAll('#galleryThumbnails img');
        thumbnails.forEach((thumb, index) => {
            thumb.className = index === currentImageIndex ? 'active' : '';
        });
    }
    
    // Keyboard navigation
    document.addEventListener('keydown', function(e) {
        const modal = document.getElementById('galleryModal');
        if (modal.classList.contains('active')) {
            if (e.key === 'Escape') {
                closeGallery();
            } else if (e.key === 'ArrowLeft') {
                previousImage();
            } else if (e.key === 'ArrowRight') {
                nextImage();
            }
        }
    });
    
    // Close gallery when clicking outside
    document.getElementById('galleryModal').addEventListener('click', function(e) {
        if (e.target === this) {
            closeGallery();
        }
    });
    
    // Scroll to contact function
    window.scrollToContact = function() {
        document.getElementById('contact').scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
    
    // Wishlist functionality
    const wishlistBtn = document.querySelector('.wishlist-btn');
    if (wishlistBtn) {
        wishlistBtn.addEventListener('click', function() {
            const icon = this.querySelector('i');
            if (icon.classList.contains('far')) {
                icon.classList.remove('far');
                icon.classList.add('fas');
                this.style.background = 'rgba(239, 68, 68, 0.1)';
                this.style.color = '#ef4444';
                showToast('Property saved to wishlist!');
            } else {
                icon.classList.remove('fas');
                icon.classList.add('far');
                this.style.background = 'rgba(32, 47, 75, 0.1)';
                this.style.color = 'var(--primary-color)';
                showToast('Property removed from wishlist!');
            }
        });
    }
    
    // Share functionality
    window.shareProperty = function() {
        const propertyName = '{{ $data->property_name }}';
        const propertyUrl = window.location.href;
        
        if (navigator.share) {
            navigator.share({
                title: propertyName,
                text: `Check out this amazing property: ${propertyName}`,
                url: propertyUrl
            });
        } else {
            navigator.clipboard.writeText(propertyUrl).then(() => {
                showToast('Property link copied to clipboard!');
            });
        }
    }
    
    // Form submission
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            const submitBtn = this.querySelector('.btn-submit');
            const originalText = submitBtn.innerHTML;
            
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;
            
            // Re-enable after 3 seconds (for validation errors)
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
            }, 3000);
        });
    }
    
    // Toast notification
    function showToast(message) {
        const toast = document.createElement('div');
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: linear-gradient(135deg, var(--secondary-color) 0%, #e6b800 100%);
            color: var(--primary-color);
            padding: 1rem 1.5rem;
            border-radius: var(--border-radius);
            z-index: 10000;
            font-weight: 600;
            box-shadow: var(--shadow-lg);
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
    
    // Add animation keyframes
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
});
</script>
@endpush