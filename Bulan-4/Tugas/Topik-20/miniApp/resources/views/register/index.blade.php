@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
<div class="col-lg-4">
 <main class="form-register w-100 m-auto">
  <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
   <form action="/register" method="POST">
    {{-- untuk mengirimkan token csrf(cross-site request forgery) agar tidak terjadi tindak kejahatan di web kita dengan web yang action form nya sama --}}
    {{-- sama saja mengirimkan <input type="hidden" name="_token" value="{{ csrf_token() }}" /> --}}
    @csrf
    <!-- Name Input -->
    <div class="form-floating">
     <input type="text" name="name" class="form-control rounded-top @error('name')
     is-invalid
     @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
     <label for="name">Name</label>
     @error('name')
     <div class="invalid-feedback">
      {{ $message }}
     </div>
     @enderror
    </div>
    <!-- Username Input -->
    <div class="form-floating">
     <input type="text" name="username" class="form-control @error('username')
      is-invalid
     @enderror" id="username" placeholder="Username" value="{{ old('username') }}">
     <label for="username">Username</label>
     @error('username')
     <div class="invalid-feedback">
      {{ $message }}
     </div>
     @enderror
    </div>
    <!-- Email Input -->
    <div class="form-floating">
     <input type="email" name="email" class="form-control @error('email')
      is-invalid
     @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}">
     <label for="email">Email address</label>
     @error('email')
     <div class="invalid-feedback">
      {{ $message }}
     </div>
     @enderror
    </div>
    <!-- Password Input -->
    <div class="form-floating">
     <input type="password" name="password" class="form-control rounded-bottom @error('password')
      is-invalid
     @enderror" id="password" placeholder="Password" value="{{ old('password') }}">
     <label for="password">Password</label>
     @error('password')
     <div class="invalid-feedback">
      {{ $message }}
     </div>
     @enderror
    </div>

     <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>

   </form>
   <small class="d-block text-center mt-3 text-muted ">Already regitered? <a href="/login" class="text-decoration-none">Login</a></small>
  </main>
</div>
</div>
@endsection
