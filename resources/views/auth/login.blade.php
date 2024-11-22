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
        padding: 60px;
        border-radius: 12px;
        box-shadow: 0px 20px 25px rgba(0, 0, 0, 0.2);
        max-width: 500px;
        width: 100%;
        text-align: center;
    }

    .auth-box img {
        margin-bottom: 20px;
        animation: fadeIn 1.5s;
        max-width: 150px;
    }

    .auth-box h3 {
        color: #6B73FF;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .auth-box p {
        font-size: 14px;
        color: #555;
        margin-bottom: 30px;
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
        width: 100%;
    }

    .btn-success {
        background: linear-gradient(45deg, #6B73FF, #000DFF);
        border: none;
        transition: background 0.3s ease;
    }

    .btn-success:hover {
        background: linear-gradient(45deg, #000DFF, #6B73FF);
    }

    .btn-info {
        background-color: #6B73FF;
        color: white;
    }

    .btn-info:hover {
        background-color: #000DFF;
    }

    .text-center p a {
        color: #6B73FF;
        font-weight: bold;
        text-decoration: none;
    }

    .form-check {
        margin-bottom: 20px;
        /* Add spacing below the checkbox */
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
            <div class="text-center">
                <img src="{{ asset('template/images2/admin.png') }}" alt="logo" />
                <h3>Sistem Informasi Perpustakaan</h3>
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
            <form id="loginform" action="{{ route('login') }}" method="POST">
                @csrf

                <!-- Email Field -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" required autofocus>
                    @error('email')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Password Field -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    </div>
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password" required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Remember Me Checkbox -->
                <div class="form-check text-start">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Remember Me</label>
                </div>

                <!-- Buttons -->
                <div class="form-group">
                    <a href="{{ route('password.request') }}" class="btn btn-info mb-2"><i class="fa fa-lock"></i> Lupa Password?</a>
                    <button type="submit" class="btn btn-success">Login</button>
                </div>

                <!-- Register Link -->
                <div class="text-center mt-3">
                    <p>Belum punya akun? <a href="{{ route('register') }}">Register</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection