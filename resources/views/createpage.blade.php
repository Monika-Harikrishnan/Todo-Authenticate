@extends('layouts.main')
@push('head')
<title>ToDo page for create</title>
@endpush
@section('main-section')
<div class="container">
    <div class="my-5">
        <div class="content">
            <div class="subhead" style="width:40rem">Create Todo's</div>
                <div class="input-create">
                    <form action="{{route("createtodo")}}" method="post">
                        @csrf
                        <table>
                            <tr>
                                <td><label for="name" class="form-label">Work</label></td>
                                <td><input type="text" name="work" class="form-control">
                             <div class="span">
                                    @error('work')
                                    {{$message}}
                                    @enderror
                                </div></td>
                            </tr>
                            <tr>
                                <td><label for="name" class="form-label">Due Date</label></td>
                                <td><input type="date" name="due_date" class="form-control">
                               <div class="span">
                                    @error('due_date')
                                    {{$message}}
                                    @enderror
                                </div></td>
                            </tr>
                        </table>

                        <button class="btn" style="margin-top:10px;width:50%;margin-left:25%">Add ToDo</button>
                    </form>
                </div>
                <div class="add" style="width:50%">
                    <a href="{{route("dashboard")}}" class="btn">Back</a>
                    </div>
@endsection
