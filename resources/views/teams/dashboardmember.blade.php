@extends('layouts.main')
@push('head')
<title>Team Members page</title>
@endpush
@section('main-section')
<div class="container">
    <div class="my-5">
        <div class="content">
        <form method="post" action="">
            @csrf
                <div class="subhead">Team Members</div>
                <div class="table">
                    <table class="table-border">
                        <tr class="th">
                            <th>Username</th>
                            <th>Password</th>
                            <th>Status</th>
                            <th colspan=2>Actions</th>
                        </tr>
                        @foreach($team as $todo)
                        <tr class="tr">
                            <td>{{$todo->first_name}}</td>
                            <td>{{$todo->last_name}}</td>
                            <td style="color: {{$todo->active == 0 ? 'red' : 'green'}};">
                                {{$todo->active == 0 ? 'Inactive' : 'Active'}}
                            </td>

                            <td>
                                <a href="{{route("editteam",$todo->id)}}" >
                                    <img src="https://cdn-icons-png.flaticon.com/128/10573/10573603.png" alt="no image" height="20px" width="20px"></a></td>
                             @if($todo->active == 0)
                             <td>
                                <a href="{{route("deleteteam",$todo->id)}}">
                                    <img src="https://cdn-icons-png.flaticon.com/128/6861/6861362.png" alt="no image" height="20px" width="20px">
                                </a>
                            </td>
                            @endif
                        </tr>
                        @endforeach
                    </table>
                </div>
                 <!-- Pagination Links -->
                 <div class="pagination" style="margin-left:25rem;width:10rem">
                    {{ $team->onEachSide(1)->links() }}
                </div>
        </form>
        <div class="add" style="margin-left:20rem">
            <a href="{{route('createmember')}}" class="btn">Add New Members</a>
            </div>
        </div>
    </div>
</div>
@endsection

