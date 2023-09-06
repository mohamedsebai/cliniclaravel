@extends('templates.TemplateClinic.clinicUser.master')
@section('title', 'login')
@section('content')


<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-decoration-none" href="./index.php">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">login</li>
                    </ol>
                </nav>

                <div class="d-flex flex-column gap-3 account-form  mx-auto mt-5">
                    <form class="form" action="validateForms/validate_login.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label required-label" for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                            >
                        </div>
                        <div class="mb-3">
                            <label class="form-label required-label" for="password">password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>

                        <div class="form-group">
                            <input type="checkbox" name="remember_me" id="remember_me" >
                            <label for="remember_me">remember me</label>
                        </div>

                        <button type="submit" class="btn btn-primary" name="login">Login</button>
                    </form>
                    <div class="d-flex justify-content-center gap-2 flex-column flex-lg-row flex-md-row flex-sm-column">
                        <span>don't have an account?</span><a class="link" href="./register.php">create account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
