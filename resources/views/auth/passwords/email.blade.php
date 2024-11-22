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
        max-width: 400px;
        width: 100%;
        text-align: center;
    }

    .auth-box h2 {
        color: #6B73FF;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 14px;
        color: #555;
        text-align: left;
        display: block;
        margin-bottom: 8px;
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
        margin-top: 15px;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, #000DFF, #6B73FF);
    }

    .alert {
        font-size: 14px;
        margin-bottom: 20px;
        border-radius: 8px;
    }

    @media (max-width: 768px) {
        .auth-box {
            padding: 30px;
        }
    }
</style>

<div class="auth-wrapper d-flex justify-content-center align-items-center">
    <div class="auth-box">
        <!-- Heading -->
        <h2>Lupa Password</h2>

        <!-- Success Message -->
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <!-- Form -->
        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <button type="submit" class="btn btn-primary">Kirim Link Reset</button>
        </form>
    </div>
</div>
@endsection