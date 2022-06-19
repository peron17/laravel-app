@extends('admin.layout.auth')

@section('title', 'Login')

@section('content')
<div class="row justify-content-center">
    <div class="col-sm-6 col-md-4 col-lg-4 mt-5">
        <div class="box login rounded p-4">
            <div class="box-header">
                <h1>Login</h1>
            </div>
            <div class="box-body">
                <form action="{{ route('admin.login.action') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="Email" class="form-label"
                            >Email</label
                        >
                        <input
                            type="text"
                            name="email"
                            id="email"
                            class="form-control"
                            autofocus
                        />
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="mb-4">
                        <label for="Password" class="form-label"
                            >Password</label
                        >
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="form-control"
                        />
                        @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="mb-4">
                        <button
                            type="submit"
                            class="btn btn-custom w-100"
                        >
                            Login
                        </button>
                    </div>

                    <div class="d-block text-center mb-2">
                        <a
                            href="forgot-password.html"
                            class="text-red"
                            >Forgot Password</a
                        >
                    </div>
                    <div class="d-block text-center">
                        <a href="registration.html" class="text-red"
                            >Registration</a
                        >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection