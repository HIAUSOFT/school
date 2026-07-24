@extends('layouts.app')

@section('content')
<h1>Admin Dashboard</h1>
<p>Recent students</p>
<table class="table">
  <thead><tr><th>ID</th><th>Name</th><th>Email</th></tr></thead>
  <tbody>
    @foreach($students as $s)
      <tr><td>{{ $s->id }}</td><td>{{ $s->first_name }} {{ $s->last_name }}</td><td>{{ $s->email }}</td></tr>
    @endforeach
  </tbody>
</table>
@endsection
