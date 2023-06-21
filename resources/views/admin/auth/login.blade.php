@extends('frontend.layouts.main')
@section('tittle')
<title>Agent Login</title>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-8">
            <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid">
                <div style="background-color: #005798; padding: 10px; margin-bottom: 30px; border-radius: 15px;" class="login-form text-center text-white p-7 position-relative overflow-hidden">
                    <!--begin::Login Header-->
                    <div class="d-flex flex-center mb-15">
                        <a href="{{ url('') }}">
                            <img src="https://www.lifeadvice.ca/images/brand.png" class="max-h-75px" alt="" />
                        </a>
                    </div>
                    <!--end::Login Header-->
                    <!--begin::Login Sign in form-->
                    <div class="login-signin">
                        <div class="mb-20">
                            <h3 class="font-weight-normal text-white">Agent Login</h3>
                            <p class="adminlogintext">Enter your details to login to your account</p>
                        </div>
                        @if(Session::get('error'))
                        <div class="alert alert-danger">{{ Session::get('error') }}</div>
                        @endif

                        <form class="user"  action="{{route('admin.login_process')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input style="min-height: 58px" class="form-control @error('email') is-invalid @enderror rounded-pill" type="text" placeholder="Email" name="email" autocomplete="off" />
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input style="min-height: 58px" class="@error('password') is-invalid @enderror form-control rounded-pill" type="password" placeholder="Password" name="password" />
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline  m-0">
                                        <input type="checkbox" id="remember" name="remember"  {{ old('remember') ? 'checked' : '' }}/>
                                        <span></span>
                                        Remember me
                                    </label>
                                </div>
                                <a href="javascript:;" id="kt_login_forgot" class="text-white font-weight-bold">Forget Password ?</a>
                            </div>
                            <div class="form-group text-center mt-10">

                                <button type="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Sign In</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <!--end::Login-->
    </div>
        </div>
    </div>
</div>
@endsection