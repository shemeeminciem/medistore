<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in - Voler Admin Dashboard</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}">
    
    <link rel="shortcut icon" href="{{url('assets/images/favicon.svg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{url('assets/css/app.css')}}">
</head>

<body>
    <div id="auth">
        
<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-12 mx-auto">
            <div class="card pt-4">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <img src="" height="48" class='mb-4'>
                        <h3>Sign In</h3>
                        <p>Please sign in to continue to your shoping.</p>
                    </div>
                    <form action="{{ route('login.post') }}" method="POST">
                        @csrf
                        <div class="form-group position-relative has-icon-left">
                            <label for="username">Username</label>
                            <div class="position-relative">
                                <input type="email" class="form-control" id="email" name="email">
                                <div class="form-control-icon">
                                    <i data-feather="user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left">
                            <div class="clearfix">
                                <label for="password">Password</label>
                                <a href="auth-forgot-password.html" class='float-right'>
                                    <small>Forgot password?</small>
                                </a>
                            </div>
                            <div class="position-relative">
                                <input type="text" class="form-control" id="password" name="password">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class='form-check clearfix my-4'>
                            <div class="checkbox float-left">
                                <input type="checkbox" id="checkbox1" class='form-check-input' >
                                <label for="checkbox1">Remember me</label>
                            </div>
                            <div class="float-right">
                                <a href="{{route('register')}}">Don't have an account?</a>
                            </div>
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-primary float-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
    <script src="{{url('assets/js/feather-icons/feather.min.js')}}"></script>
    <script src="{{url('assets/js/app.js')}}"></script>
    
    <script src="{{url('assets/js/main.js')}}"></script>
</body>

</html>
