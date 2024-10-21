@extends('layouts.main')
@push('head')
<title>Create member page</title>
@endpush
@section('main-section')
<div class="container">
    <div class="my-5">
        <div class="content">
            <div class="subhead" style="width:40rem">Create Team Member</div>
                <div class="input-create">
                    <form action="{{route("createteam")}}" method="post">
                        @csrf
                        <table>
                            <tr>
                                <td><label for="name" class="form-label">Username</label></td>
                                <td><input type="text" name="first_name" class="form-control">
                             <div class="span">
                                    @error('First Name')
                                    {{$message}}
                                    @enderror
                                </div></td>
                            </tr>
                            <tr>
                                <td><label for="name" class="form-label">Password</label></td>
                                <td><input type="text" name="last_name" class="form-control">
                               <div class="span">
                                    @error('last_name')
                                    {{$message}}
                                    @enderror
                                </div></td>
                            </tr>
                        </table>

                        <button class="btn" style="margin-top:10px;width:50%;margin-left:25%">Add Member</button>
                    </form>
                </div>
                <div class="add" style="width:50%">
                    <a href="{{route("dashboardmember")}}" class="btn">Back</a>
                    </div>
@endsection
