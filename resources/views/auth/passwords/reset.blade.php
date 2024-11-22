@extends('layouts.app')

@section('content')
<!-- Custom Styles -->
<style>
    body {
        background: linear-gradient(135deg, #6B73FF 0%, #000DFF 100%);
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        font-family: 'Poppins', sans-serif;
        margin: 0;
    }

    .auth-box {
        background: #fff;
        padding: 40px;
        border-radius: 12px;
        box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.15);
        max-width: 500px;
        width: 100%;
        text-align: center;
    }

    .auth-box h3 {
        color: #6B73FF;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .auth-box label {
        font-size: 14px;
        color: #555;
        font-weight: 500;
    }

    .form-control {
        border-radius: 10px;
        padding: 10px 15px;
        font-size: 14px;
        border: 1px solid #ddd;
    }

    .form-control:focus {
        border-color: #6B73FF;
        box-shadow: 0 0 8px rgba(107, 115, 255, 0.5);
    }

    .btn-primary {
        background: linear-gradient(45deg, #6B73FF, #000DFF);
        border: none;
        padding: 12px 20px;
        font-size: 16px;
        border-radius: 10px;
        transition: background 0.3s ease;
        width: 100%;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, #000DFF, #6B73FF);
    }

    .row {
        margin-bottom: 15px;
    }

    @media (max-width: 768px) {
        .auth-box {
            padding: 30px;
        }
    }
</style>

<div class="auth-wrapper d-flex justify-content-center align-items-center">
    <div class="auth-box">
        <h3>{{ __('Reset Password') }}</h3>
        <p style="color: #666; font-size: 14px; margin-bottom: 30px;">
            Masukkan email dan kata sandi baru untuk mengatur ulang kata sandi Anda.
        </p>

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <!-- Email Field -->
            <div class="row">
                <label for="email" class="text-start">{{ __('Email Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Password Field -->
            <div class="row">
                <label for="password" class="text-start">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Confirm Password Field -->
            <div class="row">
                <label for="password-confirm" class="text-start">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>

            <!-- Submit Button -->
            <div class="row">
                <button type="submit" class="btn btn-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection