@extends('layouts.main')

@push('head')
<title>Profile Page</title>
@endpush

@section('main-section')
<div class="container">
    <div class="my-5">
        <div class="content">
            <div class="subhead" style="width:40rem">Update profile</div>
            <div class="input-create">
                <form action="{{ route('profileupdate') }}" method="post">
                    @csrf
                    <table>
                        <tr>
                            <td>Email id:</td>
                            <td><input type="text" name="email" class="form-control" value="{{$todo->email}}"></td>
                        </tr>
                        <tr>
                            <td>Password:</td>
                            <td><input type="password" name="password" class="form-control" placeholder="enter your new password"></td>
                        </tr>
                    </table>
                    <button class="btn" style="margin-top:10px;width:30%;margin-left:15rem">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
