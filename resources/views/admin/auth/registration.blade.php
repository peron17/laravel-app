@extends('admin.layout.auth')

@section('title', 'Registration')

@section('content')
<div class="row justify-content-center">
    <div class="col-sm-6 col-md-4 col-lg-4 mt-5">
        <div class="box login rounded p-4">
            <div class="box-header">
                <h1>Registration</h1>
            </div>
            <div class="box-body">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="Full Name" class="form-label"
                            >Full Name</label
                        >
                        <input
                            type="fullname"
                            name="fullname"
                            id="fullname"
                            class="form-control"
                        />
                    </div>

                    <div class="mb-3">
                        <label for="Email" class="form-label"
                            >Email</label
                        >
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="form-control"
                        />
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
                    </div>

                    <div class="mb-4">
                        <label
                            for="Retype Password"
                            class="form-label"
                            >Retype Password</label
                        >
                        <input
                            type="password"
                            name="retype-password"
                            id="retype-password"
                            class="form-control"
                        />
                    </div>

                    <div class="mb-4">
                        <button
                            type="submit"
                            class="btn btn-custom w-100"
                        >
                            Register
                        </button>
                    </div>

                    <div class="d-block text-center">
                        <a href="login.html" class="text-red"
                            >Login</a
                        >
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

