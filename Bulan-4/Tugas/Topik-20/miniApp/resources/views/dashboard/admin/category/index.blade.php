@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Post Categories</h1>
</div>


<a href="/dashboard/categories/create" class="btn btn-success mb-3">
    Create new category
</a>

<div class="col-lg-10">
    <!-- Alert Created Category Successfull -->
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Alert Deleted Category Successfull -->
    @if (session()->has('danger'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('danger') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Category</th>
                <th scope="col">Create Time</th>
                <th scope="col">Edit Time</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @if ($categories->count())
            @foreach ($categories as $category)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at->diffForHumans() }}</td>
                <td>{{ $category->updated_at->diffForHumans() }}</td>
                <td>
                    <form action="/dashboard/categories/{{ $category->slug }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="border-0 p-0 bg-transparent" onclick="return confirm('Are you sure?')"><span data-feather="trash-2" color="red"></span></button>
                    </form>
                    <a href="/dashboard/categories/{{ $category->slug }}/edit"><span data-feather="edit" color="black"></span></a>
                </td>
                @endforeach
                @else
                <td colspan="5">
                    <span>No Category Found</span>
                </td>
                @endif
            </tr>
        </tbody>
        </table>
    </div>
</div>

@endsection
