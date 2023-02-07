@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Users</h1>
</div>

<div class="col-lg-10">
    <div class="table-responsive">
        <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
            </tr>
        </thead>

        <tbody>
            @if ($users->count())
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    @if ($user->admin === 1)
                        <span>Admin</span>
                    @else
                        <span>Member</span>
                    @endif
                </td>
                @endforeach
                @else
                <td colspan="5">
                    <span>No User Found</span>
                </td>
                @endif
            </tr>
        </tbody>
        </table>
    </div>
</div>

@endsection
