<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>NGG | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('admin/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-box">
        <div class="login-logo">
        <a href="{{url('/')}}"><b>NGG</b>EL</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">

          <div class="card-body login-card-body">
            @if(session()->has('login_error'))
          <div class="alert alert-warning">
            {{ session()->get('login_error') }}
          </div>
           @endif
            <p class="login-box-msg">Sign in to start your session</p>

            <form class="user"  method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
              @csrf
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="ผู้ใช้" name="identity" id="identity">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="รหัสผ่าน" name="password"  id="password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">

                <!-- /.col -->
                <div class="col">
                  <button type="submit" class="btn btn-danger btn-block">เข้าระบบ</button>
                </div>
                <!-- /.col -->
              </div>
            </form>

          </div>
          <!-- /.login-card-body -->
        </div>
      </div>
      <!-- /.login-box -->

<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>

</body>
</html>
