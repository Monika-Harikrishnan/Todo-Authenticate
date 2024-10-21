@extends('auth.main')
@push('head')
<title>ToDo List Welcome Page</title>
@endpush
@section('main-section')
<div class="container">
<div class="my-5">
    <div class="content">
    <form method="post" action="{{route("todoStore")}}">
        @csrf
            <div class="subhead" style="margin-left:20px">Sign up</div>
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
                <input type="password" name="password" class="input-box" placeholder="Enter your password">
            </div>
            <div class="span">
                @error('password')
                {{$message}}
                @enderror
            </div>
            <div class="input" style="border:none;padding:0px">
            <button type="submit" class="btn">Sign up</button>
            </div>
            <p class="paragraph">Already a user?<a href="{{route("login")}}">Login</a></p>
        </div>
    </form>
</div>
<div class="my-5">
    <img src="https://img.freepik.com/free-vector/checklist-concept-illustration_114360-27971.jpg?ga=GA1.1.1363070718.1726155563&semt=ais_hybrid" alt="noimage" height="400px" width="auto">
</div>
</div>

@endsection
