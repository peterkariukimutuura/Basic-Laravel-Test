@extends('layouts.app')

@section('content')
    <div class="container">
      <h1 class="display-6">Login Here</h1>
      @if (session('status'))
          <div class="alert alert-danger col-sm-6">
            {{ session('status') }}
          </div>
      @endif
      <form action="{{ route('login') }}" method="POST">
          @csrf
          <div class="form-group">
              <div class="col-sm-6">
                  <input type="email" id="email" name="email" class="form-control input-sm" 
                  placeholder="Your Email" value="{{ old('email') }}">
              </div>

              @error('email')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
          </div>
          <div class="form-group">
            <div class="col-sm-6">
              <input type="password" name="password" class="form-control input-sm" 
              placeholder="Your Password">
            </div>            

            @error('password')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label" for="remember">Remember me</label>
          </div> 
          <br>
          <button class="btn btn-primary col-sm-6" type="submit">Login</button>
      </form>
          
    </div>
@endsection