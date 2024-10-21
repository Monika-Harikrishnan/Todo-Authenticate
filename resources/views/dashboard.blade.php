@extends('layouts.main')
@push('head')
<title>ToDo dashboard page</title>
@endpush
@section('main-section')
<div class="container">
    <div class="my-5">
        <div class="content">
        <form method="post" action="">
            @csrf
                <div class="subhead">Task List</div>
                <div class="table">
                    <table class="table-border">
                        <tr class="th">
                            <th>Name</th>
                            <th>Due Date</th>
                            <th colspan=2>Actions</th>
                        </tr>
                        @foreach($todolistpage as $todo)
                        <tr class="tr">
                            <td>{{$todo->work}}</td>
                            <td>{{$todo->due_date}}</td>
                            <td>
                                <a href="{{route("pageedit",$todo->id)}}" >
                                    <img src="https://cdn-icons-png.flaticon.com/128/10573/10573603.png" alt="no image" height="20px" width="20px"></a></td>
                            <td>
                                <a href="{{route("pagedelete",$todo->id)}}">
                                    <img src="https://cdn-icons-png.flaticon.com/128/6861/6861362.png" alt="no image" height="20px" width="20px">
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
                 <!-- Pagination Links -->
                 <div class="pagination" style="margin-left:25rem;width:10rem">
                    {{ $todolistpage->onEachSide(1)->links() }}
                </div>
                <div class="add" style="margin-left:20rem">
                    <a href="{{route('createpage')}}" class="btn">Add New Todo</a>
                    </div>
        </form>
        </div>
    </div>
</div>
@endsection

