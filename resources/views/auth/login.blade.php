@extends('layouts.login')
@section('content')
<style type="text/css">
    .custom-h4{font-weight: 800;}
</style>
<div class="row w-100 mx-auto">
    <div class="col-lg-4 mx-auto">
        <div class="auto-form-wrapper">
            <!-- <div class="card-header">{{ __('Login') }}</div> -->
            <h4 class="custom-h4 mb-4">{{ __('Please Sign In') }}</h4>

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                    <div class="input-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="mdi mdi-check-circle-outline"></i>
                            </span>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="label">{{ __('Password') }}</label>

                    <div class="input-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="mdi mdi-check-circle-outline"></i>
                            </span>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary submit-btn btn-block">
                        {{ __('Sign In') }}
                    </button>
                </div>

                <div class="form-check form-check-flat mt-0">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Keep me signed in
                    </label>
                </div>

                @if (Route::has('password.request'))
                <a class="text-small forgot-password font-weight-semibold" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
                <!-- <div class="font-weight-semibold">
                    <span class="text-small">Don't have a Shield Leasing Account?</span>
                    <a href="{{url('customer-registration')}}" class="text-small">Create new account</a>
                </div> -->
            </form>
            <div class="pt-4" style="margin: 0 -7%; font-size: 10px;">
                <div>By selecting the Sign In button I agree to the latest <a href="javascript:void(0);">Terms of Use</a></div>
                <!-- <div>Shield Leasing industry standard security measures to protect the confidentially of the information you submit. Learn more about that <a href="javascript:void(0);">Security Policy</a></div> -->
            </div>
        </div>
    </div>
</div>
<!-- </div>
</div> -->
@endsection