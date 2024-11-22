@extends('layouts.app')

@section('content')
<!-- Add Custom Styles -->
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
        padding: 80px;
        border-radius: 12px;
        box-shadow: 0px 20px 25px rgba(0, 0, 0, 0.2);
        max-width: 500px;
        width: 100%;
        text-align: center;
    }

    .auth-box .db img {
        margin-bottom: 20px;
        animation: fadeIn 1.5s;
    }

    .auth-box h3 {
        color: #6B73FF;
        font-weight: bold;
        margin-bottom: 20px;
        /* Increase space below the heading */
    }

    .auth-box p {
        font-size: 14px;
        color: #555;
        margin-bottom: 30px;
        /* Increase space between the paragraph and the form */
    }

    .input-group .input-group-text {
        border-radius: 12px 0 0 12px;
        background-color: #6B73FF;
        color: #fff;
        border: none;
    }

    .form-control {
        border-radius: 0 12px 12px 0;
        border: 1px solid #ddd;
        padding: 10px 15px;
        font-size: 16px;
    }

    .form-control:focus {
        border-color: #6B73FF;
        box-shadow: 0px 0px 8px rgba(107, 115, 255, 0.5);
    }

    .btn {
        border-radius: 12px;
        padding: 12px 20px;
        font-size: 16px;
        margin-top: 15px;
        /* Add margin between buttons */
    }

    .btn-success {
        background: linear-gradient(45deg, #6B73FF, #000DFF);
        border: none;
        transition: background 0.3s ease;
        width: 100%;
        /* Ensure button fills the width */
    }

    .btn-success:hover {
        background: linear-gradient(45deg, #000DFF, #6B73FF);
    }

    .btn-info {
        background-color: #6B73FF;
        color: white;
        width: 100%;
        /* Ensure button fills the width */
    }

    .btn-info:hover {
        background-color: #000DFF;
    }

    .alert {
        border-radius: 8px;
        font-size: 14px;
        margin-bottom: 20px;
        /* Space between the alert and the form */
    }

    .auth-wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="auth-wrapper">
    <div class="auth-box">
        <div id="loginform">
            <div class="text-center p-t-20 p-b-20">
                <!-- Center the logo -->
                <span class="db">
                    <img src="{{ asset('template/images2/admin.png') }}" alt="logo" class="img-fluid" style="max-width: 200px; margin-bottom: 20px;" />
                </span>
                <h3 class="mt-3">Sistem Informasi Perpustakaan</h3>
                <p>Silakan login untuk mengakses akun Anda</p>
            </div>

            <!-- Error Alert -->
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session('error') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <!-- Login Form -->
            <form class="form-horizontal m-t-20" id="loginform" action="{{ route('login') }}" method="POST">
                @csrf

                <!-- Email Field -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-success text-white"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Masukkan Email" required autofocus>
                    @error('email')
                    <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning text-white"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control form-control-lg @error('password') is-invalid @enderror" placeholder="Masukkan Password" required>
                    @error('password')
                    <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me Checkbox -->
                <div class="row mb-3">
                    <div class="col-md-6 offset-md-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <!-- Forgot Password Button and Submit Button -->
                <div class="form-group text-center mt-3">
                    <button class="btn btn-info mb-2" id="to-recover" type="button">
                        <i class="fa fa-lock m-r-5"></i> Lupa Password?
                    </button>
                    <button class="btn btn-success mb-2" type="submit">Login</button>
                </div>

                <!-- Register Link -->
                <div class="text-center mt-3">
                    <p style="font-size: 14px; color: #555;">
                        Belum punya akun? <a href="{{ route('register') }}" style="color: #6B73FF; font-weight: bold; text-decoration: none;">Register</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection