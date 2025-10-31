@section('title', 'Login')
@extends('layouts.default')

@section('content')
    <style>
        .login-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .login-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .form-left {
            background: linear-gradient(145deg, #ffffff 0%, #f8f9fa 100%);
            position: relative;
        }

        .form-left::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, #3498db 0%, #f1c40f 50%, #3498db 100%);
        }

        .form-right {
            background: linear-gradient(145deg, #3498db 0%, #2980b9 50%, #1e3c72 100%);
            position: relative;
            overflow: hidden;
        }

        .form-right::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;

            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }

        .login-title {
            color: #2c3e50;
            font-weight: 700;
            margin-bottom: 2rem;
            position: relative;
        }

        .login-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, #3498db, #f1c40f);
            border-radius: 2px;
        }

        .form-label {
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .input-group {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .input-group:focus-within {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(52, 152, 219, 0.15);
        }

        .input-group-text {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            border: none;
            border-radius: 0;
            width: 50px;
            justify-content: center;
        }

        .form-control {
            border: none;
            padding: 12px 15px;
            font-size: 14px;
            background: #f8f9fa;
            border-radius: 0;
        }

        .form-control:focus {
            background: white;
            box-shadow: none;
            border: none;
        }

        .btn-login {
            background: linear-gradient(135deg, #3498db 0%, #2980b9 50%, #1e3c72 100%);
            border: none;
            padding: 12px 40px;
            color: #ffffff;
            border-radius: 10px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-login::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(241, 196, 15, 0.3), transparent);
            transition: left 0.5s;
        }

        .btn-login:hover::before {
            left: 100%;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            color: #ffffff;
        }

        .forgot-password {
            color: #3498db;
            text-decoration: none;
            font-weight: 600;
            position: relative;
            transition: all 0.3s ease;
        }

        .forgot-password::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #f1c40f;
            transition: width 0.3s ease;
        }

        .forgot-password:hover {
            color: #2980b9;
        }

        .forgot-password:hover::after {
            width: 100%;
        }

        .form-check-input:checked {
            background-color: #3498db;
            border-color: #3498db;
        }

        .form-check-label {
            color: #5a6c7d;
            font-weight: 500;
        }

        .logo-container {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 20px;
            padding: 30px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            margin: 2rem 0;
            animation: logoFloat 4s ease-in-out infinite;
        }

        @keyframes logoFloat {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .welcome-text {
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .welcome-subtitle {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1rem;
            margin-bottom: 2rem;
        }

        .decorative-elements {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .decorative-elements::before,
        .decorative-elements::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            background: rgba(241, 196, 15, 0.1);
        }

        .decorative-elements::before {
            width: 100px;
            height: 100px;
            top: 10%;
            right: 10%;
            animation: pulse 4s ease-in-out infinite;
        }

        .decorative-elements::after {
            width: 150px;
            height: 150px;
            bottom: 10%;
            left: 10%;
            animation: pulse 4s ease-in-out infinite 2s;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.5;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.8;
            }
        }

        @media (max-width: 768px) {
            .login-card {
                margin: 1rem;
                border-radius: 15px;
            }

            .form-left {
                padding: 2rem 1.5rem !important;
            }

            .welcome-text {
                font-size: 1.25rem;
            }
        }
    </style>

    <div class="login-page">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">
                    <div class="login-card">
                        <div class="row g-0">
                            <div class="col-md-7">
                                <div class="form-left h-100 py-5 px-5">
                                    <h2 class="login-title">Welcome Back!</h2>
                                    <p class="text-muted mb-4">Please sign in to your account</p>

                                    <form action="{{ route('login.post') }}" method="POST" class="row g-4">
                                        @csrf
                                        <div class="col-12">
                                            <label class="form-label">Email<span class="text-warning">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="bi bi-person-fill"></i>
                                                </div>
                                                <input type="email" name="email" class="form-control"
                                                    value="{{ old('email') }}" placeholder="Enter your email" required>
                                            </div>
                                            @error('email')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label class="form-label">Password<span class="text-warning">*</span></label>
                                            <div class="input-group">
                                                <div class="input-group-text">
                                                    <i class="bi bi-lock-fill"></i>
                                                </div>
                                                <input type="password" name="password" class="form-control"
                                                    placeholder="Enter your password" required>
                                            </div>
                                            @error('password')
                                                <div class="text-danger small mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-sm-6">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>



                                        <div class="col-12">
                                            <button type="submit" class="btn btn-login w-100 mt-3">Login</button>
                                        </div>
                                    </form>

                                </div>
                            </div>

                            <div class="col-md-5 d-none d-md-block">
                                <div
                                    class="form-right h-100 d-flex flex-column justify-content-center align-items-center text-center p-4 position-relative">
                                    <div class="decorative-elements"></div>

                                    <h3 class="welcome-text">Hello, Friend!</h3>
                                    <p class="welcome-subtitle">Enter your personal details and start your journey with us
                                    </p>

                                    <div class="logo-container">
                                        <img src="https://www.ut.ac.id/wp-content/uploads/2023/08/LOGO-WHITE.png"
                                            width="120" alt="University Logo" class="img-fluid">
                                    </div>

                                    <p class="text-white-50 mt-3">
                                        <small>Secure • Fast • Reliable</small>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
