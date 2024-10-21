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
                    <form action="{{route("todo.update")}}" method="post">
                        @csrf
                        <table>
                            <tr>
                                <td><label for="name" class="form-label">Work</label></td>
                                <td><input type="text" name="work" class="form-control" value="{{$todo->work}}"></td>
                            </tr>
                            <tr>
                                <td> <label for="name" class="form-label">Due Date</label></td>
                                <td> <input type="date" name="due_date" class="form-control" value="{{$todo->due_date}}"></td>
                            </tr>
                        </table>
                        <input type="number" name="id" value="{{$todo->id}}" hidden>
                        <button class="btn" style="margin-top:10px;width:30%;margin-left:15rem">Update</button>
                    </form>
                </div>
                <div class="add" style="width:50%;margin-left:36rem">
                    <a href="{{route("dashboard")}}" class="btn">Back</a>
                    </div>
@endsection

