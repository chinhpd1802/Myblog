@extends('layouts.master')

@section('title')
    Kais Blog
@endsection

@section('content')
<div class="join-are"id="container">
    <div class="form-container sign-up-container">
		<form action="{{ route('join') }}" method="post">
			<h1>Create Account</h1>
			<div class="social-container">
                <a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fa fa-google-plus-square"></i></a>
				<!-- <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> -->
			</div>
			<span>or use your email for registration</span>
			<input type="text" placeholder="Name" name="name" value="{{ Request::old('name')}}" />
            @error('name')
            <span>{{ $message }}</span>
            @enderror
			<input type="email" placeholder="Email" name = "email" value="{{ Request::old('email')}}" />
            @error('email')
            <span>{{ $message }}</span>
            @enderror
			<input type="password" placeholder="Password" name="password" value="{{ Request::old('password')}}" />
            @error('password')
            <span>{{ $message }}</span>
            @enderror
			<button type="submit">Sign Up</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="{{ route('login') }}" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fa fa-google-plus-square"></i></a>
				<!-- <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a> -->
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email" />
			<input type="password" placeholder="Password" name="password"/>
			<a href="#">Forgot your password?</a>
			<button type="submit">Sign In</button>
            <input type="hidden" name="_token" value="{{ Session::token() }}">
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
            </div>

			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
    </div>
@endsection
