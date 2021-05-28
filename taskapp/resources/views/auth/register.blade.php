@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="display-6">User Registration</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="text" id="name" name="name" class="form-control input-sm"
                     placeholder="Your Name" value="{{ old('name') }}">
                </div>

                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <fieldset class="form-group form-inline">
                <legend>Gender</legend>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" value="male" checked>
                    <label class="form-check-label" for="gender">Male</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" value="female">
                    <label class="form-check-label" for="gender">Female</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" class="form-check-input" name="gender" value="other">
                    <label class="form-check-label" for="gender">Other</label>
                </div>
            </fieldset>
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="date" id="birthday" name="birthday" class="form-control input-sm" 
                    value="{{ old('birthday') }}">
                </div>

                @error('birthday')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="tel" id="phone" name="phone" class="form-control input-sm" 
                    placeholder="Your Phone Number" value="{{ old('phone') }}">
                </div>

                @error('phone')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-group">
                <div class="col-sm-6">
                    <input type="email" id="email" name="email" class="form-control input-sm" 
                    placeholder="Your Email" value="{{ old('email') }}">
                </div>

                @error('email')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="form-row">
                <div class="form-group col-sm-3">
                    <input type="password" name="password" class="form-control input-sm" placeholder="Choose Password">

                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div> 
                <div class="form-group col-sm-3">
                    <input type="password" id="password_confirmation" name="password_confirmation" 
                    class="form-control input-sm" placeholder="Repeat Password">

                    @error('password_confirmation')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <br>
            <button class="btn btn-primary col-sm-6" type="submit">Register</button>
        </form>    
    </div>
    
@endsection