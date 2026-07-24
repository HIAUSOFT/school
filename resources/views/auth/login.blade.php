@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <h2>Login</h2>
    @if($errors->any())
      <div class="alert alert-danger">{{ $errors->first() }}</div>
    @endif
    <form method="POST" action="/login">
      <div class="mb-3">
        <label class="form-label">Email</label>
        <input name="email" class="form-control" />
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input name="password" type="password" class="form-control" />
      </div>
      <button class="btn btn-primary">Login</button>
    </form>
  </div>
</div>
@endsection
