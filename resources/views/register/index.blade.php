@extends('layouts.main')


@section('container')
<h1>Registration</h1>
<div class="row justify-content-center">
    <div class="col-lg-6">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="post">
            @csrf
              <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
          
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required>
                <label for="name">Name</label>
              </div>
              @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required>
                <label for="username">Username</label>
              </div>
              @error('username')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror

              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="emal" placeholder="Email" required>
                <label for="email">Email</label>
              </div>
              @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror

              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
              @error('password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror

              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
              
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
          </main>
    </div>
</div>
@endsection