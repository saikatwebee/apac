@extends('layouts.adminauth')

@section('content')

<div class="container-fluid p-0">
    <div class="row no-gutters">
        <div class="col-sm-6 col-lg-5 col-xxl-3  align-self-center order-2 order-sm-1">
            <div class="d-flex align-items-center h-100-vh">
                <div class="login p-50">
                    <h1 class="mb-2">Sign In</h1>
                    <p>Welcome back, please login to your account.</p>
                    <form method="POST" action="{{ route('login') }}" class="mt-3 mt-sm-5">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">User Name *</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus pattern="[a-zA-Z0-9._%+-]+@apacfin\.com"
                                       title="Please enter a valid @apacfin.com email address">
                                                            
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">Password *</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- <div class="col-12">
                                <div class="d-block d-sm-flex  align-items-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="gridCheck" id="gridCheck" {{ old('gridCheck') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="gridCheck">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                    

                                    @if (Route::has('password.request'))
                                        <a class="ml-auto" href="{{ route('password.request') }}">
                                            {{ __('Forgot Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div> -->
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary text-uppercase">
                                    {{ __('Sign In') }}

        

                                </button>
                            </div>
                            <!-- <div class="col-12  mt-3">
                                <p>Don't have an account ?<a href="{{ url('register') }}"> Sign Up</a></p>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xxl-9 col-lg-7 bg-gradient o-hidden order-1 order-sm-2">
            <div class="row align-items-center h-100">
                <div class="col-7 mx-auto ">
                    <!--<img class="img-fluid" src="{{ asset('admin/assets/img/bg/login.svg') }}" alt="">-->
                    <img class="img-fluid" src="https://app.svgator.com/assets/svgator.webapp/log-in-girl.svg" alt="" >
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="display: none;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

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

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
