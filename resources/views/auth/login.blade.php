@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="middle-box text-center loginscreen animated fadeInDown">
            <div>
                <div>
                    <h1 class="logo-name">IN+</h1>            
                </div>
                <h3>Welcome to IN+</h3>                                    
                    <form class="m-t" method="POST" action="{{ route('login') }}">
                        @csrf                    
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="form-group">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>                        
                        <button type="submit" class="btn btn-primary block full-width m-b">{{ __('Login') }}</button>
                            @if (Route::has('password.request'))
                                <small><a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a></small>
                            @endif
                            
                        <p class="text-muted text-center"><small>Do not have an account?</small></p>                        
                        @if (Route::has('register'))                        
                            <a class="btn btn-sm btn-white btn-block" href="{{ route('register') }}">{{ __('Register') }}</a>                         
                        @endif
                    </form>                    
                </div>
            </div>
@endsection
