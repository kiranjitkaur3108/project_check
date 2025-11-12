@extends('layouts.app')

@section('title', 'Profile | Celebrations')

@section('content')
<style>
    body {
        background-color: #f4e9dd;
    }

    .profile-container {
        max-width: 900px;
        margin: 60px auto;
        background: #ffffff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        display: flex;
        justify-content: center;
    }

    .profile-card {
        width: 100%;
        display: flex;
        gap: 30px;
        align-items: center;
        flex-wrap: wrap;
    }

    .profile-avatar {
        width: 140px;
        height: 140px;
        border-radius: 10px;
        object-fit: cover;
        border: 1px solid #d8c1b4;
        flex-shrink: 0;
    }

    .profile-info {
        flex: 1;
    }

    .profile-info h3 {
        color: #ae674e;
        margin: 0 0 8px 0;
    }

    .profile-meta {
        color: #5c4033;
        margin-bottom: 18px;
        font-size: 16px;
        line-height: 1.6;
    }

    .btn-uniform {
        background-color: #ae674e;
        color: #fff;
        border: none;
        border-radius: 6px;
        padding: 10px 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.2s;
        display: inline-block;
        text-decoration: none;
    }

    .btn-uniform:hover {
        background-color: #8f523d;
        color: #fff;
    }

    @media (max-width: 768px) {
        .profile-card {
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        .profile-avatar {
            margin-bottom: 20px;
        }
    }
</style>

<div class="profile-container">
    <div class="profile-card">
        <div>
            @php
                $avatar = $user->profile_image ? asset('storage/profile_images/'.$user->profile_image) : asset('images/default-avatar.png');
            @endphp
            <img src="{{ $avatar }}" alt="Profile Image" class="profile-avatar">
        </div>

        <div class="profile-info">
            <h3>{{ $user->name }}</h3>
            <div class="profile-meta">
                <div><strong>Email:</strong> {{ $user->email }}</div>
                <div><strong>Role:</strong> {{ ucfirst($user->role) }}</div>
                <div><strong>Member since:</strong> {{ $user->created_at->format('F j, Y') }}</div>
            </div>

            <a href="{{ route('profile.edit') }}" class="btn-uniform">Edit Profile</a>
        </div>
    </div>
</div>
@endsection
