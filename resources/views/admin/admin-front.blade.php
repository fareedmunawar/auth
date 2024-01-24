@extends('admin.sidebar-head.sidebar')
@section('admin-body')

<p>working</p>
<form method="POST" action="{{ url('/logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
@endsection
