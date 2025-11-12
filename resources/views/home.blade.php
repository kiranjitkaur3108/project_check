@extends('layouts.app')

@section('title', 'Home | Celebrations')

@section('content')
    <style>
        body {
            background-color: #f4e9dd;
        }
        .hero-subtitle {
            font-size: 1.75rem;
            color: #6A3F3F;
        }
        .service-card {
            transition: all 0.3s ease-in-out;
        }
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        .gallery-item .ratio {
            transition: transform 0.4s ease, box-shadow 0.4s ease;
        }
        .gallery-item:hover .ratio {
            transform: scale(1.05);
            box-shadow: 0 8px 20px rgba(0,0,0,0.12);
        }
        .gallery-item:hover .overlay-text {
            opacity: 1;
        }
        .overlay-text span {
            padding: 0 0.5rem;
            font-family: Garamond, serif;
        }
        .bg-image {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .bg-image:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
        .banner-section {
            font-family: Garamond, serif;
        }

        .banner-slide {
            color: #6A3F3F;
            position: relative;
        }

        .banner-content {
            /background: rgba(255, 255, 255, 0.65); ! soft overlay for readability !/
            max-width: 800px;
        }
        .hero-subtitle {
            font-size: 1.75rem; /* increase subtitle size */
            /text-shadow: 1px 1px 3px rgba(0,0,0,0.5); ! keep readability on images !/
        }
        #testimonialCarousel blockquote {
            font-size: 1.5rem;
            color: #6A3F3F;
            margin-bottom: 0.5rem;
        }

        #testimonialCarousel p {
            color: #6A3F3F;
            font-weight: 600;
        }

        #testimonialCarousel .carousel-item {
            transition: opacity 1s ease-in-out;
        }
        #testimonialCarousel .carousel-control-prev-icon,
        #testimonialCarousel .carousel-control-next-icon {
            background-color: #AE674E;}

    </style>

    <!-- Hero / Banner Section -->
    <section class="banner-section mb-5">
        @foreach($banners as $banner)
            <div class="banner-slide d-flex align-items-center justify-content-center text-center"
                 style="background-image: url('{{ asset($banner->image_path) }}'); background-size: cover; background-position: center; height: 80vh;">
                <div class="banner-content p-3 p-md-5">
                    <h1 class="fw-bold mb-3 display-6 display-md-4">{{ $banner->title }}</h1>
                    <p class="lead mb-4 hero-subtitle">{{ $banner->subtitle }}</p>
                    @if($banner->link)
                        <a href="{{ $banner->link }}" class="btn btn-outline-primary btn-lg px-4"
                           style="background-color: #fffbf8; color: #AE674E; border-color: #AE674E; font-weight: 600; text-transform: uppercase; border-radius: 10px;">
                            PLAN YOUR EVENT
                        </a>
                    @endif
                </div>
            </div>
        @endforeach
    </section>
    <!-- Testimonials / Quote Section -->
    <section class="text-center mb-5">
        <div id="testimonialCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="4000">
            <div class="carousel-inner">

                @foreach($testimonials as $key => $test)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <blockquote class="blockquote fst-italic hero-subtitle">
                            "{{ $test->quote }}"
                        </blockquote>
                        <p class="fw-semibold">{{ $test->name }}, {{ $test->designation }}</p>
                    </div>
                @endforeach

            </div>

            <!-- Optional Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <!-- Welcome / Introduction Section -->
    <section class="py-5 text-center container mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-3">Welcome to Celebrations</h2>
                <p class="mb-4 hero-subtitle">
                    We are your trusted partner in creating unforgettable experiences. Our expert team plans, coordinates, and executes every detail so you can enjoy every moment.
                </p>
                <img src="{{ asset('images/output-onlinepngtools.png') }}" class="img-fluid rounded shadow-sm" alt="Event Celebration">
            </div>
        </div>
    </section>

    <!-- Services / Highlights Section -->
    <section class="py-5 mb-5" style="background: linear-gradient(180deg, #fffaf5 0%, #fff4ee 100%);">
        <div class="container text-center">
            <h3 class="fw-bold mb-5" style="font-family: Garamond, serif; color: #6A3F3F;">Our Services</h3>

            <div class="row g-4">
                @foreach($features as $feature)
                    <div class="col-md-4 col-sm-6">
                        <div class="service-card p-4 border rounded-3 h-100 shadow-sm text-center">
                            <i class="{{ $feature->icon_class }} fa-3x mb-3" style="color:#AE674E;"></i>
                            <h5 class="fw-semibold mb-3">{{ $feature->title }}</h5>
                            <p>{{ $feature->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- CTA Button Section -->
            <div class="text-center mt-5">
                @foreach($ctaBanners as $cta)
                    <a href="{{ $cta->link }}" class="btn btn-outline-primary btn-lg px-4"
                       style="background-color: #fffbf8; color: #AE674E; border-color: #AE674E;
                  padding: 0.5rem 1.5rem; font-weight: 600; text-transform: uppercase; border-radius: 50px;">
                        {{ $cta->text }}
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Statistics Section -->
    <section class="py-5 mb-5 bg-light">
        <div class="container text-center">
            <div class="row g-4">
                @foreach($statistics as $stat)
                    <div class="col-md-4 col-sm-6">
                        <div class="p-4 border rounded-3 h-100 shadow-sm">
                            <i class="{{ $stat->icon_class }} fa-3x mb-3" style="color:#AE674E;"></i>
                            <h3 class="fw-bold">{{ $stat->value }}</h3>
                            <p style="font-family: Garamond, serif; font-weight: 600; color:#6A3F3F;">{{ $stat->label }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="container py-5 mb-5">
        <h3 class="text-center fw-bold mb-4">:: Gallery ::</h3>
        <div class="row justify-content-center g-3">
            @foreach($galleryImages as $img)
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="card border-0 shadow-sm">
                        <div class="ratio ratio-1x1">
                            <div class="bg-image"
                                 style="background: url('{{ asset($img->image_path) }}') center/cover no-repeat; border-radius: 10px;">
                            </div>
                        </div>
                        <div class="card-body p-2 text-center" style="font-family: Garamond, serif; color: #6A3F3F; font-weight: 600;">
                            {{ $img->event_name }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ url('/gallery') }}"
               class="btn btn-outline-primary"
               style="background-color: #fffbf8; color: #AE674E; border-color: #AE674E;
                  padding: 0.5rem 1.5rem; font-weight: 600; text-transform: uppercase; border-radius: 10px;">
                View Full Gallery
            </a>
        </div>
    </section>
@endsection
