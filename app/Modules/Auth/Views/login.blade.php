@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Login') }}</div>  
                <div class="card-body">
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <p class=" alert alert-danger">
                        {{ $error }}
                    </p>
                    @endforeach
                    @endif
                    @if(session()->has('status'))
                    <p class="col-md-12 alert alert-success notify_msg">
                        {{ session()->get('status') }}
                    </p>
                    @endif 
                    <form method="POST" action="">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                                <a class="btn btn-link" href="{{ url('forgot') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                    <div class="btn white darken-4 col s10 m4">
                        <a href="{{url('google-login')}}" style="text-transform:none; color:black;">
                            <div class="pull-left col col-6 col-md-5 col-lg-3" style="border:1px solid; padding-top: 1%; padding-bottom: 1%;">
                                <img width="20px" alt="Google &quot;G&quot; Logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png"/> Login with Google
                            </div>
                        </a>

                        <a href="{{url('github-login')}}" style="text-transform:none; color:black;">
                            <div class="pull-left col col-6 col-md-5 col-lg-3" style="border:1px solid; padding-top: 1%; padding-bottom: 1%; ">                                  <i class="fa fa-github github-style"></i> Login With Github
                            </div>
                        </a>
                             <a href="{{url('facebook-login')}}" style="text-transform:none; color:#0000cc;">
                            <div class="pull-left col col-6 col-md-5 col-lg-3" style="border:1px solid; padding-top: 1%; padding-bottom: 1%; ">                                  <i class="fa fa-facebook github-style"></i> Login With Facebook
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
