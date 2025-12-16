<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @include('login.style')
</head>

<body>
    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-5 col-md-8 animate-fadein">
                <div class="login-container">
                    <div class="login-header">
                        <h2>{{ config('app.name') }}</h2>
                        <p class="mt-2 mb-0">Silahkan masuk ke akun Anda</p>
                    </div>

                    <div class="login-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <div class="input-group">
                                    {{-- <span class="input-group-text"><i class="fas fa-user"></i></span> --}}
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}" placeholder="Email">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="input-group">
                                    {{-- <span class="input-group-text"><i class="fas fa-lock"></i></span> --}}
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid    
                                    @enderror"
                                        placeholder="Password">

                                    @error('password')
                                        <div class="invalid-feedback text-start">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="rememberMe">
                                <label class="form-check-label" for="rememberMe">
                                    Remember me
                                </label>
                            </div> --}}

                            <button type="submit" name="submit" class="btn btn-primary btn-block btn-login w-100">
                                <i class="fas fa-sign-in-alt me-2"></i> Login
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('login.script')
</body>

</html>
