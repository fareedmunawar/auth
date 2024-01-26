@extends('admin.sidebar-head.sidebar')
@section('admin-body')



<div class="container">
    <h2>Create Department</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('departments.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="dept_name">Department Name:</label>
            <input type="text" name="dept_name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="designation">Designation:</label>
            <input type="text" name="designation" class="form-control" required>
        </div>
        <button type="submit" class="form-group btn btn-primary mt-2">Submit</button>
    </form>

    {{-- Logout button --}}
    <form method="POST" class="mt-5" action="{{ url('/logout') }}">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>
</div>





@endsection
