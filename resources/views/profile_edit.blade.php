@extends('layouts.app')

@section('title', 'Edit Profile | Celebrations')

@section('content')
<style>
    body {
        background-color: #f4e9dd;
    }

    .edit-profile-container {
        max-width: 900px;
        margin: 60px auto;
        background: #ffffff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 6px 20px rgba(0,0,0,0.15);
        display: flex;
        justify-content: center;
    }

    .edit-profile-card {
        width: 100%;
        max-width: 600px;
    }

    .edit-profile-card h3 {
        color: #ae674e;
        margin-bottom: 20px;
        text-align: center;
    }

    .form-control {
        margin-bottom: 15px;
        border-radius: 6px;
        padding: 10px;
        border: 1px solid #ccc;
        width: 100%;
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
        width: 100%;
    }

    .btn-uniform:hover {
        background-color: #8f523d;
        color: #fff;
    }

    .current-avatar {
        width: 80px;
        margin-top: 10px;
        border-radius: 6px;
    }
</style>

<div class="edit-profile-container">
    <div class="edit-profile-card">
        <h3>Edit Profile</h3>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label fw-bold">Name</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Email</label>
                <input type="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Profile Picture</label>
                <input type="file" name="profile_image" class="form-control">
                @if($user->profile_image)
                    <img src="{{ asset('storage/profile_images/' . $user->profile_image) }}"
                         alt="Current Picture" class="current-avatar">
                @endif
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">New Password</label>
                <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current password">
            </div>

            <div class="mb-3">
                <label class="form-label fw-bold">Confirm New Password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm new password">
            </div>

            <button type="submit" class="btn-uniform">Save Changes</button>
        </form>
    </div>
</div>
@endsection
