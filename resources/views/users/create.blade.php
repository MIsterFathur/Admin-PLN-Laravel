@extends('layouts.app')

@section('content')
<h2>Add User</h2>

<form action="{{ route('user_store') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="gol_id">Email</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="mb-3">
    <label for="gol_id">Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  <div class="mb-3">
    <label for="">Nama</label>
    <input type="text" name="name" id="" class="form-control">
  </div>
  <div class="mb-3">
    <label for="">Alamat</label>
    <input type="text" name="user_alamat" id="" class="form-control">
  </div>
  <div class="mb-3">
    <label for="">No Hp</label>
    <input type="text" name="user_hp" id="" class="form-control">
  </div>
  <div class="mb-3">
    <label for="">Pos</label>
    <input type="text" name="user_pos" class="form-control">
  </div>

  <div class="mb-3">
    <label for="">Role</label>
    <input type="text" name="user_role" id="" class="form-control">
  </div>
  <div class="mb-3">
    <label for="">Status</label>
    <input type="text" name="user_aktif" id="" class="form-control">
  </div>
  <div class="mb-3">
    <input type="submit" value="SAVE" class="btn btn-primary">
  </div>
</form>
@endsection