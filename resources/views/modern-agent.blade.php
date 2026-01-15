@extends('layouts.modern')

@section('title', 'Become a Partner - Kingsbury Global Investment Limited')
@section('description', 'Join our network of successful real estate partners. Grow your business with Kingsbury Global Investment Limited and access exclusive opportunities.')

@section('content')
<!-- Hero Section -->
<section class="hero" style="background-image: linear-gradient(rgba(32, 47, 75, 0.8), rgba(26, 37, 47, 0.6)), url('{{ asset('images/kingsbury_contractor.jpg') }}');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title" data-aos="fade-up">
            Become a <span style="color: var(--secondary-600);">Partner</span>
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
            Join our network of successful real estate professionals and unlock exclusive opportunities 
            for growth, collaboration, and success in Nigeria's thriving property market.
        </p>
        <div class="hero-cta" data-aos="fade-up" data-aos-delay="400">
            <a href="#partnership-form" class="btn btn-primary btn-lg">
                <i class="fas fa-handshake"></i>
                Apply Now
            </a>
            <a href="#benefits" class="btn btn-ghost btn-lg">
                <i class="fas fa-info-circle"></i>
                Learn More
            </a>
        </div>
    </div>
</section>

<!-- Why Partner With Us -->
<section class="section" id="benefits">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Why Partner With Kingsbury?</h2>
            <p>Discover the exclusive benefits and opportunities that come with being a Kingsbury partner</p>
        </div>
        
        <div class="grid grid-cols-3 gap-8 mb-16">
            <div class="card card-elevated text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body">
                    <div class="mb-6">
                        <div style="width: 80px; height: 80px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: var(--shadow-secondary);">
                            <i class="fas fa-chart-line" style="font-size: 2rem; color: var(--primary-900);"></i>
                        </div>
                    </div>
                    <h3 style="color: var(--primary-900); margin-bottom: var(--space-4);">High Commission Rates</h3>
                    <p style="color: var(--neutral-600); line-height: 1.7;">
                        Earn competitive commissions with our industry-leading rates. The more you sell, the more you earn with our tiered commission structure.
                    </p>
                </div>
            </div>
            
            <div class="card card-elevated text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="card-body">
                    <div class="mb-6">
                        <div style="width: 80px; height: 80px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: var(--shadow-secondary);">
                            <i class="fas fa-graduation-cap" style="font-size: 2rem; color: var(--primary-900);"></i>
                        </div>
                    </div>
                    <h3 style="color: var(--primary-900); margin-bottom: var(--space-4);">Training & Support</h3>
                    <p style="color: var(--neutral-600); line-height: 1.7;">
                        Access comprehensive training programs, marketing materials, and ongoing support to help you succeed in the real estate market.
                    </p>
                </div>
            </div>
            
            <div class="card card-elevated text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="card-body">
                    <div class="mb-6">
                        <div style="width: 80px; height: 80px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: var(--shadow-secondary);">
                            <i class="fas fa-building" style="font-size: 2rem; color: var(--primary-900);"></i>
                        </div>
                    </div>
                    <h3 style="color: var(--primary-900); margin-bottom: var(--space-4);">Exclusive Properties</h3>
                    <p style="color: var(--neutral-600); line-height: 1.7;">
                        Get first access to our premium property listings and exclusive developments before they hit the general market.
                    </p>
                </div>
            </div>
            
            <div class="card card-elevated text-center" data-aos="fade-up" data-aos-delay="400">
                <div class="card-body">
                    <div class="mb-6">
                        <div style="width: 80px; height: 80px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: var(--shadow-secondary);">
                            <i class="fas fa-users" style="font-size: 2rem; color: var(--primary-900);"></i>
                        </div>
                    </div>
                    <h3 style="color: var(--primary-900); margin-bottom: var(--space-4);">Network Access</h3>
                    <p style="color: var(--neutral-600); line-height: 1.7;">
                        Join a network of successful agents and brokers. Share leads, collaborate on deals, and grow your business together.
                    </p>
                </div>
            </div>
            
            <div class="card card-elevated text-center" data-aos="fade-up" data-aos-delay="500">
                <div class="card-body">
                    <div class="mb-6">
                        <div style="width: 80px; height: 80px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: var(--shadow-secondary);">
                            <i class="fas fa-laptop" style="font-size: 2rem; color: var(--primary-900);"></i>
                        </div>
                    </div>
                    <h3 style="color: var(--primary-900); margin-bottom: var(--space-4);">Technology Platform</h3>
                    <p style="color: var(--neutral-600); line-height: 1.7;">
                        Access our cutting-edge CRM system, marketing tools, and mobile app to manage your clients and properties efficiently.
                    </p>
                </div>
            </div>
            
            <div class="card card-elevated text-center" data-aos="fade-up" data-aos-delay="600">
                <div class="card-body">
                    <div class="mb-6">
                        <div style="width: 80px; height: 80px; background: var(--gradient-secondary); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto; box-shadow: var(--shadow-secondary);">
                            <i class="fas fa-award" style="font-size: 2rem; color: var(--primary-900);"></i>
                        </div>
                    </div>
                    <h3 style="color: var(--primary-900); margin-bottom: var(--space-4);">Recognition Program</h3>
                    <p style="color: var(--neutral-600); line-height: 1.7;">
                        Get recognized for your achievements with our partner awards program, including bonuses and special incentives.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partnership Types
<section class="section" style="background: linear-gradient(135deg, var(--neutral-50) 0%, var(--neutral-0) 100%);">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Partnership Opportunities</h2>
            <p>Choose the partnership model that best fits your business goals and experience level</p>
        </div>
        
        <div class="grid grid-cols-3 gap-8">
            <div class="card card-elevated" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body text-center">
                    <div class="mb-6">
                        <div class="bg-primary-100 text-primary-700 px-4 py-2 rounded-full text-sm font-medium inline-block mb-4">
                            Individual Agent
                        </div>
                        <h3 style="color: var(--primary-900); margin-bottom: var(--space-4);">Sales Agent</h3>
                    </div>
                    <div class="text-left space-y-3 mb-8">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">5-10% Commission Rate</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">Basic Training Program</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">Marketing Support</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">Lead Generation</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">Mobile App Access</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-primary-900 mb-2">Perfect for</div>
                        <div class="text-neutral-600">New agents and individuals looking to start their real estate career</div>
                    </div>
                </div>
            </div>
            
            <div class="card card-elevated relative" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute top-0 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="bg-secondary-600 text-primary-900 px-4 py-2 rounded-full text-sm font-bold">
                        MOST POPULAR
                    </div>
                </div>
                <div class="card-body text-center">
                    <div class="mb-6">
                        <div class="bg-secondary-100 text-secondary-700 px-4 py-2 rounded-full text-sm font-medium inline-block mb-4">
                            Team Leader
                        </div>
                        <h3 style="color: var(--primary-900); margin-bottom: var(--space-4);">Broker Partner</h3>
                    </div>
                    <div class="text-left space-y-3 mb-8">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">10-15% Commission Rate</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">Advanced Training</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">Team Building Support</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">Exclusive Listings</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">Override Commissions</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-primary-900 mb-2">Perfect for</div>
                        <div class="text-neutral-600">Experienced agents ready to build and lead their own team</div>
                    </div>
                </div>
            </div>
            
            <div class="card card-elevated" data-aos="fade-up" data-aos-delay="300">
                <div class="card-body text-center">
                    <div class="mb-6">
                        <div class="bg-primary-100 text-primary-700 px-4 py-2 rounded-full text-sm font-medium inline-block mb-4">
                            Enterprise
                        </div>
                        <h3 style="color: var(--primary-900); margin-bottom: var(--space-4);">Franchise Partner</h3>
                    </div>
                    <div class="text-left space-y-3 mb-8">
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">15-20% Commission Rate</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">Full Business Support</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">Territory Rights</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">Brand Licensing</span>
                        </div>
                        <div class="flex items-center gap-3">
                            <i class="fas fa-check-circle text-success-600"></i>
                            <span class="text-neutral-700">Revenue Sharing</span>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="text-2xl font-bold text-primary-900 mb-2">Perfect for</div>
                        <div class="text-neutral-600">Established brokers looking to expand with our brand and systems</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Success Stories -->
<!-- <section class="section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Success Stories</h2>
            <p>Hear from our successful partners who have grown their business with Kingsbury</p>
        </div>
        
        <div class="grid grid-cols-3 gap-8">
            <div class="card card-elevated" data-aos="fade-up" data-aos-delay="100">
                <div class="card-body text-center">
                    <div class="mb-6">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&h=150&fit=crop&crop=face" 
                             alt="Partner" class="w-20 h-20 rounded-full mx-auto object-cover">
                    </div>
                    <h4 style="color: var(--primary-900); margin-bottom: var(--space-2);">Adebayo Johnson</h4>
                    <p style="color: var(--secondary-600); margin-bottom: var(--space-4); font-weight: var(--font-medium);">Senior Partner, Lagos</p>
                    <p style="color: var(--neutral-600); line-height: 1.7; font-style: italic;">
                        "Joining Kingsbury was the best decision I made for my real estate career. In just 2 years, I've tripled my income and built a team of 15 agents."
                    </p>
                    <div class="mt-6 flex justify-center">
                        <div class="flex text-secondary-600">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card card-elevated" data-aos="fade-up" data-aos-delay="200">
                <div class="card-body text-center">
                    <div class="mb-6">
                        <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?w=150&h=150&fit=crop&crop=face" 
                             alt="Partner" class="w-20 h-20 rounded-full mx-auto object-cover">
                    </div>
                    <h4 style="color: var(--primary-900); margin-bottom: var(--space-2);">Fatima Abdullahi</h4>
                    <p style="color: var(--secondary-600); margin-bottom: var(--space-4); font-weight: var(--font-medium);">Franchise Partner, Abuja</p>
                    <p style="color: var(--neutral-600); line-height: 1.7; font-style: italic;">
                        "The training and support from Kingsbury helped me transition from corporate to real estate successfully. Now I run the most successful office in Abuja."
                    </p>
                    <div class="mt-6 flex justify-center">
                        <div class="flex text-secondary-600">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card card-elevated" data-aos="fade-up" data-aos-delay="300">
                <div class="card-body text-center">
                    <div class="mb-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face" 
                             alt="Partner" class="w-20 h-20 rounded-full mx-auto object-cover">
                    </div>
                    <h4 style="color: var(--primary-900); margin-bottom: var(--space-2);">Chinedu Okafor</h4>
                    <p style="color: var(--secondary-600); margin-bottom: var(--space-4); font-weight: var(--font-medium);">Sales Agent, Port Harcourt</p>
                    <p style="color: var(--neutral-600); line-height: 1.7; font-style: italic;">
                        "As a new agent, Kingsbury's mentorship program gave me the confidence and skills I needed. I closed my first ₦50M deal within 6 months."
                    </p>
                    <div class="mt-6 flex justify-center">
                        <div class="flex text-secondary-600">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- Partnership Application Form -->
<section class="section" id="partnership-form" style="background: linear-gradient(135deg, var(--neutral-50) 0%, var(--neutral-0) 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card card-elevated" data-aos="fade-up">
                    <div class="card-body">
                        <div class="text-center mb-8">
                            <h2 style="color: var(--primary-900); margin-bottom: var(--space-4);">Apply for Partnership</h2>
                            <p style="color: var(--neutral-600); font-size: var(--text-lg);">
                                Take the first step towards joining Nigeria's leading real estate network. 
                                Fill out the form below and we'll get back to you within 24-48 hours.
                            </p>
                        </div>
                        
                        @if(session('msg'))
                            <div class="mb-8 p-6 bg-success-50 border border-success-200 rounded-2xl text-success-700" data-aos="fade-up">
                                {!! session('msg') !!}
                            </div>
                        @endif
                        
                        <form action="{{ route('submit-agent-form') }}" method="POST" class="space-y-6">
                            @csrf
                            
                            <div class="grid grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label class="form-label">Company/Individual Name *</label>
                                    <input type="text" name="company_name" class="form-input" required 
                                           placeholder="Enter your company or full name">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Email Address *</label>
                                    <input type="email" name="email" class="form-input" required 
                                           placeholder="Enter your email address">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label class="form-label">Phone Number *</label>
                                    <input type="tel" name="phone" class="form-input" required 
                                           placeholder="Enter your phone number">
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Gender</label>
                                    <select name="sex" class="form-select">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Prefer not to say">Prefer not to say</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-6">
                                <div class="form-group">
                                    <label class="form-label">State/Location *</label>
                                    <select name="state" class="form-select" required>
                                        <option value="">Select State</option>
                                        <option value="Lagos">Lagos</option>
                                        <option value="Abuja">Abuja (FCT)</option>
                                        <option value="Rivers">Rivers</option>
                                        <option value="Ogun">Ogun</option>
                                        <option value="Kano">Kano</option>
                                        <option value="Kaduna">Kaduna</option>
                                        <option value="Oyo">Oyo</option>
                                        <option value="Delta">Delta</option>
                                        <option value="Edo">Edo</option>
                                        <option value="Anambra">Anambra</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label class="form-label">Partnership Type</label>
                                    <select name="partnership_type" class="form-select">
                                        <option value="">Select Partnership Type</option>
                                        <option value="Sales Agent">Sales Agent</option>
                                        <option value="Broker Partner">Broker Partner</option>
                                        <option value="Franchise Partner">Franchise Partner</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Company Address</label>
                                <textarea name="company_address" class="form-textarea" rows="3" 
                                          placeholder="Enter your business address"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">How did you hear about us?</label>
                                <select name="hear_about_us" class="form-select">
                                    <option value="">Select an option</option>
                                    <option value="Social Media">Social Media</option>
                                    <option value="Google Search">Google Search</option>
                                    <option value="Referral">Referral from Partner</option>
                                    <option value="Advertisement">Advertisement</option>
                                    <option value="Event">Event/Conference</option>
                                    <option value="Website">Website</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label">Tell us about your experience</label>
                                <textarea name="experience" class="form-textarea" rows="4" 
                                          placeholder="Share your real estate experience, goals, and why you want to partner with Kingsbury..."></textarea>
                            </div>
                            
                            <div class="form-group">
                                <div class="flex items-start gap-3">
                                    <input type="checkbox" id="terms" name="terms" class="mt-1" required>
                                    <label for="terms" class="text-sm text-neutral-600">
                                        I agree to the <a href="#" class="text-primary-600 hover:text-primary-700">Terms and Conditions</a> 
                                        and <a href="#" class="text-primary-600 hover:text-primary-700">Privacy Policy</a>. 
                                        I consent to being contacted by Kingsbury Global Investment Limited regarding partnership opportunities.
                                    </label>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-paper-plane"></i>
                                    Submit Application
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="section" style="background: var(--gradient-primary);">
    <div class="container">
        <div class="text-center text-white" data-aos="fade-up">
            <h2 style="color: var(--neutral-0); margin-bottom: var(--space-6);">Have Questions About Partnership?</h2>
            <p style="color: rgba(255,255,255,0.9); font-size: var(--text-xl); margin-bottom: var(--space-8); max-width: 600px; margin-left: auto; margin-right: auto;">
                Our partnership team is here to help you understand the opportunities and answer any questions you may have.
            </p>
            
            <div class="grid grid-cols-3 gap-8 mb-12">
                <div class="text-center">
                    <div class="w-16 h-16 bg-secondary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-phone text-2xl text-primary-900"></i>
                    </div>
                    <h4 class="mb-2 text-white">Call Us</h4>
                    <p class="text-neutral-200">+(234)-7048000779</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-secondary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-envelope text-2xl text-primary-900"></i>
                    </div>
                    <h4 class="mb-2 text-white">Email Us</h4>
                    <p class="text-white-200">partnerships@kingsburyglobal.com</p>
                </div>
                
                <div class="text-center">
                    <div class="w-16 h-16 bg-secondary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fab fa-whatsapp text-2xl text-white-900"></i>
                    </div>
                    <h4 class="mb-2 text-white">WhatsApp</h4>
                    <p class="text-white-200">Chat with us instantly</p>
                </div>
            </div>
            
            <div class="flex justify-center gap-4 flex-wrap">
                <a href="tel:+2347048000779" class="btn btn-primary btn-lg">
                    <i class="fas fa-phone"></i>
                    Call Now
                </a>
                <a href="https://wa.me/2347048000779" target="_blank" class="btn btn-ghost btn-lg">
                    <i class="fab fa-whatsapp"></i>
                    WhatsApp Chat
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    /* Agent/Partner Page Specific Styles */
    .card.card-elevated {
        transition: var(--transition-smooth);
    }
    
    .card.card-elevated:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-2xl);
    }
    
    /* Form enhancements */
    .form-input:focus,
    .form-select:focus,
    .form-textarea:focus {
        border-color: var(--primary-500);
        box-shadow: 0 0 0 3px rgba(32, 47, 75, 0.1);
    }
    
    /* Checkbox styling */
    input[type="checkbox"] {
        width: 18px;
        height: 18px;
        accent-color: var(--primary-600);
    }
    
    /* Success stories images */
    .card img {
        border: 3px solid var(--secondary-600);
    }
    
    /* Mobile responsive */
    @media (max-width: 1024px) {
        .grid-cols-3 {
            grid-template-columns: 1fr;
        }
    }
    
    @media (max-width: 768px) {
        .grid-cols-2 {
            grid-template-columns: 1fr;
        }
        
        .hero-title {
            font-size: var(--text-5xl);
        }
        
        .hero-cta {
            flex-direction: column;
            align-items: center;
        }
    }
    
    /* Partnership type cards special styling */
    .card.card-elevated.relative {
        border: 2px solid var(--secondary-600);
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Form enhancement
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function(e) {
                const submitBtn = this.querySelector('button[type="submit"]');
                const originalText = submitBtn.innerHTML;
                
                // Check if required fields are filled
                const requiredFields = this.querySelectorAll('[required]');
                let allValid = true;
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        allValid = false;
                        field.style.borderColor = 'var(--error-500)';
                    } else {
                        field.style.borderColor = '';
                    }
                });
                
                if (allValid) {
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting Application...';
                    submitBtn.disabled = true;
                    
                    // Re-enable button after form submission (in case of validation errors)
                    setTimeout(() => {
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }, 5000);
                } else {
                    e.preventDefault();
                    showToast('Please fill in all required fields', 'error');
                }
            });
        }
        
        // Real-time validation
        document.querySelectorAll('.form-input, .form-select, .form-textarea').forEach(input => {
            input.addEventListener('blur', function() {
                if (this.hasAttribute('required') && !this.value.trim()) {
                    this.style.borderColor = 'var(--error-500)';
                } else {
                    this.style.borderColor = '';
                }
            });
            
            input.addEventListener('input', function() {
                if (this.style.borderColor === 'var(--error-500)' && this.value.trim()) {
                    this.style.borderColor = '';
                }
            });
        });
        
        // Email validation
        const emailInput = document.querySelector('input[type="email"]');
        if (emailInput) {
            emailInput.addEventListener('blur', function() {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (this.value && !emailRegex.test(this.value)) {
                    this.style.borderColor = 'var(--error-500)';
                    showToast('Please enter a valid email address', 'error');
                } else {
                    this.style.borderColor = '';
                }
            });
        }
        
        // Phone validation
        const phoneInput = document.querySelector('input[type="tel"]');
        if (phoneInput) {
            phoneInput.addEventListener('input', function() {
                // Remove non-numeric characters except + and spaces
                this.value = this.value.replace(/[^\d+\s-]/g, '');
            });
        }
        
        // Smooth scroll to form
        document.querySelectorAll('a[href="#partnership-form"]').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('partnership-form').scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });
        });
        
        // Enhanced card animations
        document.querySelectorAll('.card.card-elevated').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-12px)';
                this.style.boxShadow = 'var(--shadow-2xl)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = 'var(--shadow-lg)';
            });
        });
        
        // Partnership type selection
        const partnershipCards = document.querySelectorAll('.card.card-elevated');
        const partnershipSelect = document.querySelector('select[name="partnership_type"]');
        
        partnershipCards.forEach((card, index) => {
            card.addEventListener('click', function() {
                const partnershipTypes = ['Sales Agent', 'Broker Partner', 'Franchise Partner'];
                if (partnershipSelect && partnershipTypes[index]) {
                    partnershipSelect.value = partnershipTypes[index];
                    
                    // Scroll to form
                    document.getElementById('partnership-form').scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    });
    
    // Toast notification function
    function showToast(message, type = 'success') {
        const toast = document.createElement('div');
        const bgColor = type === 'error' ? 'var(--error-600)' : 'var(--success-600)';
        
        toast.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            background: ${bgColor};
            color: white;
            padding: 12px 24px;
            border-radius: 12px;
            z-index: 10000;
            animation: slideInRight 0.3s ease;
            box-shadow: var(--shadow-lg);
            max-width: 300px;
        `;
        toast.textContent = message;
        document.body.appendChild(toast);
        
        setTimeout(() => {
            toast.style.animation = 'slideOutRight 0.3s ease';
            setTimeout(() => {
                if (document.body.contains(toast)) {
                    document.body.removeChild(toast);
                }
            }, 300);
        }, 4000);
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