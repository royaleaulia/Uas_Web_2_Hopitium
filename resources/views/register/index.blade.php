@extends('layouts.main')


@section('container')
<h1>Registration</h1>
<div class="row justify-content-center">
    <div class="col-lg-6">
        <main class="form-registration w-100 m-auto">
            <form>
              <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
          
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                <label for="username">Username</label>
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="emal" placeholder="Email">
                <label for="email">Email</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                <label for="password">Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
              
            </form>
            <small class="d-block text-center mt-3">Already registered? <a href="/login">Login</a></small>
          </main>
    </div>
</div>
@endsection