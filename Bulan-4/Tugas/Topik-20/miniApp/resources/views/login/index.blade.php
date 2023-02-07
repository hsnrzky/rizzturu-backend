@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-4">
    <main class="form-signin w-100 m-auto">
      <!-- Alert Register Successfull -->
      @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      <!-- Alert Login Failed -->
      @if (session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{ session('loginError') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
      <form action="/login" method="POST">
        @csrf
        <!-- Email Input -->
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email')
            is-invalid
          @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
           </div>
          @enderror
        </div>
        <!-- Password Input -->
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        <!-- Remember Me -->
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label mb-3" for="remember">
                Remember Me
            </label>
        </div>


        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

      </form>
      <small class="d-block text-center mt-3 text-muted ">Not registered? <a href="/register" class="text-decoration-none">Register Now!</a></small>
     </main>
  </div>
</div>


@endsection
