@extends('layouts.app');

@section('content')
    <div class="container">
        @include('inc.messages')
        <h1 class="display-4">Get Password Reset Link</h1>
        <p>Enter your email address</p>
        <form action="{{ route('password.email') }}" method="post">
            @csrf
            <div class="form-group">
                <div class="col-sm-6">
                    <label for="email">Email</label>
                    
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror

                    <input type="email" name="email" id="email" placeholder="Enter your email"
                    class="form-control input-sm" value="{{ old('email') }}">
                    <br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

            
        </form>
    </div>
@endsection