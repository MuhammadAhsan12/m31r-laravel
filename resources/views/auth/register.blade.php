@extends('auth.master')

@section('pagecontent')
    <h4>New here?</h4>
    <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
    <form class="pt-3" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control form-control-lg @error('name') is-invalid @enderror"
                id="exampleInputUsername1" placeholder="Name" name="name" value="{{ old('name') }}" required
                autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <input type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                placeholder="Email" id="exampleInputEmail1" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password" id="exampleInputPassword1" placeholder="Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" class="form-control form-control-lg" name="password_confirmation" required
                autocomplete="new-password" placeholder="Password">
        </div>
        <div class="mt-3">
            <button type="submit"
                class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{ __('Register') }}</button>
        </div>
        <div class="text-center mt-4 font-weight-light">
            Already have an account? <a href="{{ route('login') }}" class="text-primary">{{ __('Login') }}</a>
        </div>
    </form>
@stop
