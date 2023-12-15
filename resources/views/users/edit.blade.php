@extends('layouts.app')

@section('content')
<h2>Edit User</h2>

<form action="{{ route('user_update', ['id' => $user->id]) }}" method="post">
  @method('PUT')
  @csrf
  <div class="mb-3">
    <label for="">Email</label>
    <input type="text" name="email" id="" class="form-control" value="{{ $user->email }}" required>
  </div>
  <div class="mb-3">
    <label for="">Password</label>
    <input type="password" name="password" id="" class="form-control" value="{{ $user->password }}" required>
  </div>
  <div class="mb-3">
    <label for="">Nama</label>
    <input type="text" name="name" id="" class="form-control" value="{{ $user->name }}" required>
  </div>

  <div class="mb-3">
    <input type="submit" value="UPDATE" class="btn btn-primary">
  </div>
</form>

@endsection