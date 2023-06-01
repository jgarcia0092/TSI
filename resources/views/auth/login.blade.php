@extends('layouts.frontend',['body_class'=>'login-page'])

@section('head')

@endsection

@section('content')
    <div class="page-header header-filter"
         style="background-image: url(&apos;../assets/img/bg7.jpg&apos;); background-size: cover; background-position: top center;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 ml-auto mr-auto">
                    <div class="card card-signup">
                        <form class="form" method="" action="">
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">{{ __('Login') }}</h4>
                                &nbsp;
                            </div>
                            <p class="description text-center">Enter your information below to login</p>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">mail</i>
                                        </span>
                                    </div>
                                    <input placeholder="{{__('Email')}}" id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email" autofocus>

                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons">lock_outline</i>
                                        </span>
                                    </div>
                                    <input placeholder="{{__('Password')}}" id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">

                                </div>
                                <div class="form-check text-right py-2">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }} >
                                        {{ __('Remember Me') }}
                                        <span class="form-check-sign"><span class="check"></span></span>
                                    </label>
                                </div>

                            </div>
                            <div class="footer text-center py-2">
                                <button type="submit"
                                        class="btn btn-primary btn-link btn-wd btn-lg">{{ __('Login') }}</button>
                            </div>
                            <div class="clearfix mt-2 text-center px-3 py-3">
                                <a href="{{ route('password.request') }}" class="">
                                    Forgot Password
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('common.footer')
    </div>

@endsection
