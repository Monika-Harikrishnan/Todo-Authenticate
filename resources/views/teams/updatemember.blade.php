@extends('layouts.main')
@push('head')
<title>ToDo update page</title>
@endpush
@section('main-section')
<div class="container">
    <div class="my-5">
        <div class="content">
            <div class="subhead" style="width:40rem">Update Todo's</div>
                <div class="input-create">
                    <form action="{{route("updateteam")}}" method="post">
                        @csrf
                        <table>
                            <tr>
                                <td><label for="name" class="form-label">first_name</label></td>
                                <td><input type="text" name="first_name" class="form-control" value="{{$team->first_name}}"></td>
                            </tr>
                            <tr>
                                <td> <label for="name" class="form-label">last_name</label></td>
                                <td> <input type="text" name="last_name" class="form-control" value="{{$team->last_name}}"></td>
                            </tr>
                            <tr>
                                <td> <label for="name" class="form-label">status</label></td>
                                <td> <input type="text" name="active" class="form-control" value="{{$team->active}}"></td>
                            </tr>
                        </table>
                        <input type="number" name="id" value="{{$team->id}}" hidden>
                        <button class="btn" style="margin-top:10px;width:30%;margin-left:15rem">Update</button>
                    </form>
                </div>
                <div class="add" style="width:50%;margin-left:36rem">
                    <a href="{{route("dashboardmember")}}" class="btn">Back</a>
                    </div>
@endsection

