<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url("/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url("/adminlte/bower_components/font-awesome/css/font-awesome.min.css") }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url("/adminlte/bower_components/Ionicons/css/ionicons.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url("/adminlte/dist/css/AdminLTE.min.css") }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url("/adminlte/plugins/iCheck/square/blue.css") }}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <a href="../../index2.html"><b>Admin</b>LTE</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <form action="{{ url("/do-register") }}" method="post">
                @csrf
                <!-- sea surf -->
                <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Username" name="username" value="{{old('username')}}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                @error('username')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Email" name="email" value="{{old('email')}}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Retype password" name="password_confirmation">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                @error('password_confirm')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Full Name" name="fullname">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                @error('fullname')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Gender" name="gender">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                @error('gender')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Birth Date" name="birthdate">
                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                </div>
                @error('birthdate')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Graduation Date" name="graduationdate">
                    <span class="glyphicon glyphicon-calendar form-control-feedback"></span>
                </div>
                @error('graduationdate')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="URL Website pribadi" name="website">
                    <span class="glyphicon glyphicon-certificate form-control-feedback"></span>
                </div>
                @error('website')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="nomor ktp" name="nomorktp">
                    <span class="glyphicon glyphicon-apple form-control-feedback"></span>
                </div>
                @error('nomorktp')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" name="agree"> I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
                @error('agree')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </form>

            {{-- @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
            @endif --}}
        </div>
        <!-- /.form-box -->
    </div>
    <!-- /.register-box -->

    <!-- jQuery 3 -->
    <script src="{{ url("/adminlte/bower_components/jquery/dist/jquery.min.js") }}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ url("/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js") }}"></script>
    <!-- iCheck -->
    <script src="{{ url("/adminlte/plugins/iCheck/icheck.min.js") }}"></script>
    <script>
        $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
    </script>
</body>

</html>
