@extends('layouts.app')

@section('title', 'My Favourites')

@section('content')
<style>
    body {
        background-color: #f4e9dd;
    }

    .favourites-container {
        max-width: 1100px;
        margin: 60px auto;
        background: #ffffff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 25px;
    }

    .service-card {
        background: #fffaf7;
        border-radius: 12px;
        padding: 15px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
    }

    .service-card img {
        width: 100%;
        height: 160px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 10px;
    }

    .service-card h3 {
        font-size: 18px;
        color: #ae674e;
        margin-bottom: 5px;
    }

    .service-card p {
        font-size: 14px;
        color: #555;
        margin-bottom: 8px;
    }
     .wishlist-btn {
        background-color: #ae674e;
        color: white;
        padding: 12px 25px;
        border-radius: 30px;
        font-weight: bold;
        text-decoration: none;
        border: none;
        cursor: pointer;
        transition: all 0.3s ease;
        margin:10px;
    }

    .wishlist-btn:hover {
        background-color: #8f523d;
        transform: scale(1.05);
         margin:10px;
    }

    .wishlist-btn:active {
        transform: scale(0.95);
         margin:10px;
    }

</style>

<div class="favourites-container">
    <h1 class="services-title">My Favourites</h1>

    @if ($favourites->isEmpty())
    <p style="text-align: center;">You haven’t added any favourites yet.</p>
    @else
    <div class="services-grid">
        @foreach ($favourites as $fav)
        <div class="service-card">
            <img src="{{ asset($fav->service->image) }}" alt="{{ $fav->service->name }}">
            <h3>{{ $fav->service->name }}</h3>
            <p>{{ $fav->service->description }}</p>
            <p><strong>Price:</strong> ${{ $fav->service->price }}</p>
            <form action="{{ route('favourites.destroy', $fav->id) }}" method="POST" style="margin-top:10px;">
                @csrf
                @method('DELETE')
                <button type="submit" class="wishlist-btn">
                    Remove
                </button>
            </form>


        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection