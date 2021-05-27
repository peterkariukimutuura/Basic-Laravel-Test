@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-6">User Registration</h1>
        <form action="{{ route('register') }}" method="POST" class="justify-content-center">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <div class="col-sm-5">
                    <input type="text" name="name" class="form-control input-sm" placeholder="Your Name">
                </div>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email address</label>
                <div class="col-sm-5">
                    <input type="email" name="email" class="form-control input-sm" placeholder="Your Email">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Email address</label>
                <div class="col-sm-5">
                    <input type="password" name="password" class="form-control input-sm" placeholder="Your Password">
                </div>
            </div>
            <fieldset class="form-group">
                <legend>Gender</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="option1" checked>
                    Male
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="option2">
                    Female
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="gender" value="option3">
                    Other
                  </label>
                </div>
            </fieldset>
            <div class="form-group">
                <label for="phone" class="form-label">Phone Number</label>
                <div class="col-sm-5">
                    <input type="tel" name="phone" class="form-control input-sm">
                </div>
            </div>
            <div class="form-group">
                <label for="bday" class="form-label">Date of Birth</label>
                <div class="col-sm-5">
                    <input type="date" name="bday" class="form-control input-sm">
                </div>
            </div>
            <br>
            <button class="btn btn-primary col-sm-5" type="submit">Register</button>
        </form>    
    </div>
    
@endsection