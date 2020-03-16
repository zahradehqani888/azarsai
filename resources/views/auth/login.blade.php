<html>
<head>

</head>
<body>
@extends('master')

@section('content')


    <section class="login-page section-b-space cmn_bg_yellow">
        <ul class="plus_decore">
            <li></li>
            <li></li>
        </ul>
<div class="container">
    <div class="row justify-content-center" >
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h4>{{ __('ورود') }}</h4></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('ایمیل') }}</label>

                            <div class="col-md-6">
                                <input  id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('رمزعبور') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-solid" id="mc-submitsa" type="submit">ورود</button>
                                <button class="btn btn-solid" id="mc-submita" style="margin-right: 30px;"><a  href="/register" style="color:#333333;">ایجاد حساب </a></button>


                                <a class="btn btn-link" href="{{--{{ route('password.request') }}--}}" style="color: #fe7d0b;text-decoration:none;">
                                    {{ __('رمزعبور را فراموش کرده اید؟') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </section>
@endsection
</body>
</html>
