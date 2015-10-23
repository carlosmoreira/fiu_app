<!-- resources/views/auth/login.blade.php -->

{{--<form method="POST" action="/auth/login">--}}
{{--{!! csrf_field() !!}--}}

{{--<div>--}}
{{--Email--}}
{{--<input type="email" name="email" value="{{ old('email') }}">--}}
{{--</div>--}}

{{--<div>--}}
{{--Password--}}
{{--<input type="password" name="password" id="password">--}}
{{--</div>--}}

{{--<div>--}}
{{--<input type="checkbox" name="remember"> Remember Me--}}
{{--</div>--}}

{{--<div>--}}
{{--<button type="submit">Login</button>--}}
{{--</div>--}}
{{--</form>--}}



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="/libs/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="container" id="formContainer">

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form method="POST" class="form-signin" id="login" role="form" action="/auth/login">

                        {!! csrf_field() !!}
                        <h3 class="form-signin-heading">Please sign in</h3>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" id="loginEmail" value="{{ old('email') }}" required autofocus />
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="loginPass" placeholder="Password" required />
                        </div>

                        <div class="form-group">
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                        </div>




                    </form>
                </div>
            </div>



        </div>
        <!-- /container -->
    </div>
</div>

</body>
</html>

