@extends('layouts.welcome')
@section('content')
<div class="auth-wrapper">
    <div class="auth-box">
        <div class="text-center d-flex align-items-center justify-content-center">
            <span class="db mt-9">
                <img src="{{ asset('img/admin.png') }}" alt="logo" class="img-fluid" style="max-width: 200px; margin-bottom: 30px;" />
            </span>
            <div>
                <h3 class="mt-8" style="color: #000000; font-weight: bold; padding-left: 130px;">Buat Akun Baru</h3>
                <p style="color: #000000; padding-left: 120px;  margin-bottom: -50px;">Isi form di bawah untuk mendaftar</p>
            </div>
        </div>

        <!-- Form Register -->
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-6">
                    <!-- Nama Lengkap -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control form-control-lg @error('name') is-invalid @enderror"
                            placeholder="Nama Lengkap" required>
                        @error('name')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- NPM -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-info text-white"><i class="fas fa-id-card"></i></span>
                        </div>
                        <input type="text" name="npm" value="{{ old('npm') }}"
                            class="form-control form-control-lg @error('npm') is-invalid @enderror"
                            placeholder="NPM" required>
                        @error('npm')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Program Studi -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning text-white"><i class="fas fa-graduation-cap"></i></span>
                        </div>
                        <input type="text" name="prodi" value="{{ old('prodi') }}"
                            class="form-control form-control-lg @error('prodi') is-invalid @enderror"
                            placeholder="Program Studi" required>
                        @error('prodi')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Alamat -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white"><i class="fas fa-home"></i></span>
                        </div>
                        <textarea name="alamat" class="form-control form-control-lg @error('alamat') is-invalid @enderror"
                            placeholder="Alamat" required style="height: 115px;">{{ old('alamat') }}</textarea>
                        @error('alamat')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="col-md-6">
                    <!-- No. Telp -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-danger text-white"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" name="noTelp" value="{{ old('noTelp') }}"
                            class="form-control form-control-lg @error('noTelp') is-invalid @enderror"
                            placeholder="No. Telp" required>
                        @error('noTelp')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Email -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-info text-white"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="email" name="email" value="{{ old('email') }}"
                            class="form-control form-control-lg @error('email') is-invalid @enderror"
                            placeholder="Email" required>
                        @error('email')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning text-white"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" name="password"
                            class="form-control form-control-lg @error('password') is-invalid @enderror"
                            placeholder="Password" required>
                        @error('password')
                        <span class="invalid-feedback alert-danger" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-warning text-white"><i class="fas fa-lock"></i></span>
                        </div>
                        <input type="password" name="password_confirmation"
                            class="form-control form-control-lg"
                            placeholder="Konfirmasi Password" required>
                    </div>

                    <!-- Register Button -->
                    <div class="form-group text-center mt-3">
                        <button class="btn btn-success btn-lg btn-block mb-2" type="submit">
                            <i class="fas fa-user-plus"></i> Register
                        </button>
                    </div>

                    <!-- Already have an account -->
                    <div class="text-center mt-3">
                        <p style="color: #FFFFFF; font-weight: bold;">Sudah punya akun? <a href="{{ route('login') }}"
                                style="color: #333333;">Login</a></p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection