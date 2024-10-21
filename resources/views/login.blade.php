@extends('auth.main')
@push('head')
<title>ToDo Login page</title>
@endpush
@section('main-section')
<div class="container">
<div class="my-5">
    <div class="content">
    <form method="post" action="{{route("validlogin")}}">
        @csrf
            <div class="subhead" style="margin-left:20px">Login</div>
            <div class="input">
                {{-- <label for="email">Email</label><br> --}}
                <input type="text" name="email" class="input-box"  placeholder="Enter your email" >
            </div>
            <div class="span">
                @error('email')
                {{$message}}
                @enderror
            </div>

            <div class="input">
                {{-- <label for="password">Password</label><br> --}}
                <input type="text" name="password" class="input-box" placeholder="Enter your password">
            </div>
            <div class="span">
                @error('password')
                {{$message}}
                @enderror
            </div>
            <div class="input" style="border:none;padding:0px">
            <button type="submit" class="btn">Login</button>
            </div>
            <p class="paragraph"><a href="{{route("login")}}">Forget password?</a></p>
        </div>
        <p class="paragraph">Dont have an account?<a href="{{route("welcome")}}">sign up</a></p>
    </form>
    @if ($errors->has('email_error'))
    <div>
        <strong>{{ $errors->first('email_error') }}</strong>
    </div>
@endif

@if ($errors->has('password_error'))
    <div>
        <strong>{{ $errors->first('password_error') }}</strong>
    </div>
@endif
</div>
<div class="my-5">
    <img src="https://img.freepik.com/premium-photo/drawing-cell-phone-with-pen-pen-it_1274269-160765.jpg?w=740" alt="noimage" height="400px" width="auto">
</div>
</div>
@endsection


