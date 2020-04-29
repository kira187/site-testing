@extends('layouts.app')

@section('content')
<div class="passwordBox animated fadeInDown">
        <div class="row">
            <div class="col-md-12">
                <div class="ibox-content">
                    <h2 class="font-bold">{{ __('Reset Password') }}</h2>
                    <p>
                        Enter your email address and your password will be reset and emailed to you.
                    </p>

                    <div class="row">
                        <div class="col-lg-12">                    
                            <form  class="m-t" method="POST" action="{{ route('password.email') }}">
                            @csrf
                                <div class="form-group">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                </div>                                
                                <button type="submit" class="btn btn-primary block full-width m-b"> {{ __('Send Password Reset Link') }} </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Example Company
            </div>
            <div class="col-md-6 text-right">
               <small>© 2020</small>
            </div>
        </div>
    </div>
    
@endsection
