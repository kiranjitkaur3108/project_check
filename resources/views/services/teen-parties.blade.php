@extends('layouts.app')

@section('title', 'Teen Parties')

@section('content')
<style>
    body { background-color: #f4e9dd; }
    .detail-container {
        max-width: 1100px; margin: 60px auto; background:#ffffff; padding:36px; border-radius:12px;
        box-shadow:0 6px 20px rgba(0,0,0,0.15);
    }
    .detail-hero { text-align:center; margin-bottom:24px; }
    .detail-title { font-family: 'Pacifico', cursive; color:#ae674e; font-size:34px; font-weight:700; margin-bottom:8px; }
    .detail-lead { color:#555; font-size:16px; margin-bottom:20px; }
    .detail-grid { display: grid; grid-template-columns: 1fr 340px; gap: 24px; align-items:start; }
    .detail-card { background:#fff6f0; padding:20px; border-radius:10px; box-shadow:0 4px 12px rgba(0,0,0,0.08); }
    .section-title { color:#ae674e; font-size:20px; margin-bottom:12px; }
    ul.features { list-style: disc; padding-left:20px; color:#444; line-height:1.7; }
    .price-box { background:#fff6f0; padding:18px; border-radius:8px; text-align:center; }
    .price-amount { font-size:22px; color:#ae674e; font-weight:700; margin-bottom:6px; }
    .book-btn {
        display: inline-block;
        padding: 12px 28px;
        background-color: #ae674e;
        color: #fff;
        font-weight: bold;
        border-radius: 30px;
        text-decoration: none;
        font-size: 16px;
        transition: all 0.3s ease;
    }
    .book-btn:hover {
        background-color: #8e513d;
        transform: scale(1.05);
    }
    .hero-img { width:100%; height:260px; object-fit:cover; border-radius:8px; margin-bottom:16px; }
</style>

<div class="detail-container">
    <div class="detail-hero">
        <h1 class="detail-title">Teen Parties</h1>
        <p class="detail-lead">Fun, vibrant, and trend-driven celebrations designed especially for teens! From sweet sixteen themes to high-energy dance nights — we plan the ultimate teen experience.</p>
    </div>

    <div class="detail-grid">
        <div>
            <h3 class="section-title">What is a Teen Party service?</h3>
            <p>Our Teen Party packages are all about creativity, music, and youthful energy. We handle every detail — from décor and entertainment to snacks and lighting — so the birthday star and their friends can have an unforgettable night.</p>

            <h3 class="section-title">Key Features</h3>
            <ul class="features">
                <li>Theme-based décor (e.g., glow party, neon night, Hollywood glam, beach bash)</li>
                <li>Professional DJ or curated music playlist setup</li>
                <li>Customized invitations and social media backdrops</li>
                <li>Photo booth and instant photo printing options</li>
                <li>Games, contests, and event host/emcee coordination</li>
            </ul>

            <h3 class="section-title">What we include</h3>
            <ul class="features">
                <li>Full event setup and teardown</li>
                <li>Lighting, sound, and party props</li>
                <li>Snacks, dessert table, and soft drink arrangements</li>
                <li>Guest coordination and safety supervision (on-site staff)</li>
            </ul>
        </div>

        <aside class="detail-card">
            <h4 class="section-title">Price</h4>
            <div class="price-box">
                <div class="price-amount">Starting at $1,200</div>
                <div>Standard Teen Party Package</div>
                <small>Custom pricing available for larger venues, premium décor, and celebrity DJ options.</small>
            </div>

            <h4 class="section-title" style="margin-top:18px;">Timing & Guests</h4>
            <p style="color:#444; line-height:1.6;">Typical duration: 3–5 hours. Ideal for 30–100 guests. Pricing varies by theme, location, and special add-ons.</p>

            <div style="text-align: center; margin-top: 30px;">
                <a href="{{ route('book.details', ['serviceName' => urlencode('Teen Parties'), 'charges' => 1200]) }}" class="book-btn">
                    Book Now
                </a>
            </div>
        </aside>
    </div>
</div>
@endsection
