@extends('layouts.admin.app')

@section('content')

<body class=""style="background-color: #eeafaf;">

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card pt-5 px-3 bg-biru papan">
      <div class="circle-container">
        <div class="circle">
          <img src="{{ asset('img/logo-login.png') }}" class="my-2 " alt="Gambar Kecil">
        </div>
      </div>

      <div class="card-body ">
        <h3 class="card-title mb-4 text-center" style="color: #eeafaf;">Login</h3>
        <form class="mx-3 user"  role="form" method="POST" action="{{ route('login') }}">
          @csrf
          <div class="from-group">
            <label for="username" class="text-white form-label mb-1">Username</label>
            <div class="input-group mb-3 ">
              <span class="input-group-text icon-dalam"><i class="fas fa-envelope-square"
                  style="color: #ffffff;"></i></span>
              <input type="text" class="form-control isi-text-login" placeholder="Username" name="username" id="username" >
              @error('username')
              <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <div class="from-group">
            <label for="password" class="text-white form-label mb-1">Password</label>
            <div class="input-group mb-3 ">
              <span class="input-group-text icon-dalam"><i class="fas fa-lock" style="color: #ffffff;"></i></span>
              <input type="password" class="form-control text-grey isi-text-login" name="password" id="password" placeholder="Password">
              @error('password')
              <p class="text-danger text-xs mt-2">{{ $message }}</p>
              @enderror
            </div>
          </div>
          <button type="submit" class="btn btn-primary col-12 mt-3"
            style="background-color: #eeafaf;color: #000; font-weight: bold;border-width: 0%;">LOGIN</button>
        </form>
        <p class="mt-3 mb-0 text-white text-center" style="font-size: smaller;">Don't have an account ? <a href="{{ route('register')}}"
            style="color: #eeafaf;text-decoration: none;">Sign Up</a></p>
      </div>
    </div>
  </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
@endsection