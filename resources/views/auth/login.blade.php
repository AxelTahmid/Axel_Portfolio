@extends('layouts.admin')

@section('content')

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('images/fav.ico') }}" alt="logo">
              </div>
              <h4>{{ "Hello! let's get started" }}</h4>
              <h6 class="font-weight-light">{{ "Sign in to continue." }}</h6>

              <form name="login-form" id="login-form" class="pt-3" method="POST" action="{{url('/login')}}">
                @csrf
                <div class="form-group">
                  <input type="email" name="email" required class="form-control form-control-lg" id="login-email" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="password" name="password" required class="form-control form-control-lg" id="login-password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">{{ "SIGN IN" }}</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      {{ "Keep me signed in" }}
                    </label>
                  </div>
                  <a href="#" class="auth-link text-black" style="pointer-events: none;">{{ "Forgot password?" }}</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  @stop