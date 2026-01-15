@extends('layouts.modern')

@section('title', '404 - Page Not Found - Kingsbury Global Investment Limited')
@section('description', 'The page you are looking for could not be found. Return to Kingsbury Global Investment Limited homepage.')

@section('content')
<section class="min-h-screen flex items-center justify-center" style="background: linear-gradient(135deg, var(--neutral-50) 0%, var(--neutral-0) 100%); padding-top: 120px;">
    <div class="container">
        <div class="text-center" data-aos="fade-up">
            <div class="mb-8">
                <div style="font-size: 8rem; font-weight: var(--font-bold); color: var(--secondary-600); line-height: 1;">
                    404
                </div>
            </div>
            
            <h1 style="font-size: var(--text-5xl); color: var(--primary-900); margin-bottom: var(--space-6);">
                Page Not Found
            </h1>
            
            <p style="font-size: var(--text-xl); color: var(--neutral-600); margin-bottom: var(--space-8); max-width: 600px; margin-left: auto; margin-right: auto;">
                Sorry, we couldn't find the page you're looking for. The page might have been moved, deleted, or you entered the wrong URL.
            </p>
            
            <div class="flex justify-center gap-4 flex-wrap mb-12">
                <a href="{{ route('home') }}" class="btn btn-primary btn-lg">
                    <i class="fas fa-home"></i>
                    Back to Home
                </a>
                <a href="{{ url('property') }}" class="btn btn-outline btn-lg">
                    <i class="fas fa-building"></i>
                    Browse Properties
                </a>
            </div>
            
            <!-- Quick Links -->
            <div class="grid grid-cols-4 gap-6 max-w-2xl mx-auto">
                <a href="{{ route('home') }}" class="card p-6 text-center hover:shadow-lg transition-all">
                    <i class="fas fa-home text-2xl text-secondary-600 mb-3"></i>
                    <div class="font-medium text-primary-900">Home</div>
                </a>
                
                <a href="{{ url('property') }}" class="card p-6 text-center hover:shadow-lg transition-all">
                    <i class="fas fa-building text-2xl text-secondary-600 mb-3"></i>
                    <div class="font-medium text-primary-900">Properties</div>
                </a>
                
                <a href="{{ url('land') }}" class="card p-6 text-center hover:shadow-lg transition-all">
                    <i class="fas fa-map text-2xl text-secondary-600 mb-3"></i>
                    <div class="font-medium text-primary-900">Land</div>
                </a>
                
                <a href="{{ url('agent') }}" class="card p-6 text-center hover:shadow-lg transition-all">
                    <i class="fas fa-handshake text-2xl text-secondary-600 mb-3"></i>
                    <div class="font-medium text-primary-900">Partner</div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('styles')
<style>
    @media (max-width: 768px) {
        .grid-cols-4 {
            grid-template-columns: repeat(2, 1fr);
        }
        
        .flex.gap-4 {
            flex-direction: column;
            align-items: center;
        }
    }
</style>
@endpush