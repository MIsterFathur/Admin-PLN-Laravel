@extends('layouts.app')

@section('content')

<h2>User</h2>

<a href="{{ route('user_create') }}" class="btn btn-primary mb-3 float-end">Add User</a>

<table class="table table-bordered">
  <tr>
    <th>NO</th>
    <th>Email</th>
    <th>Nama</th>
    <th>alamat</th>
    <th>No HP</th>
    <th>Pos</th>
    <th>Role</th>
    <th>Aktif</th>
    <th>EDIT</th>
    <th>DELETE</th>
  </tr>
  <?php $no = 1; ?>
  @foreach ($data as $d)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $d->email }}</td>
    <td>{{ $d->name }}</td>
    <td>{{ $d->user_alamat }}</td>
    <td>{{ $d->user_hp }}</td>
    <td>{{ $d->user_pos }}</td>
    <td>{{ $d->user_role }}</td>
    <td>{{ $d->user_aktif }}</td>
    <td>
      <form action="{{ route('user_edit', ['id' => $d->id]) }}" method="GET">
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </td>
    <td>
      <form action="{{ route('user_delete', ['id' => $d->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
      </form>

    </td>
  </tr>
  @endforeach


</table>

@endsection