@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center px-4" style="min-height: 100vh; background: linear-gradient(to right, #f9f9f9, #e0f0ff);">
    <div class="login-container w-50">
        <div class="login-header">
            <h2>Login</h2>
            <p class="text-muted">Masuk ke akun Anda</p>
        </div>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email Anda" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan password Anda" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-100">Masuk</button>
        </form>
    </div>
</div>
@endsection

@push('styles')
<style>
    .login-container {
        max-width: 500px;
        width: 100%;
        padding: 40px;
        background: #ffffff;
        border-radius: 12px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        margin: auto;
    }
    .login-header {
        text-align: center;
        margin-bottom: 25px;
    }
    .login-header h2 {
        font-weight: bold;
        color: #084298;
    }
    .btn-primary {
        background-color: #0d6efd;
        border-color: #0d6efd;
    }
    .btn-primary:hover {
        background-color: #084298;
        border-color: #084298;
    }
</style>
@endpush
