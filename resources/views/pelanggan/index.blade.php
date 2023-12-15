@extends('layouts.app')

@section('content')

<h2>Pelanggan</h2>

<a href="{{ route('pel_create') }}" class="btn btn-primary mb-3 float-end">Add Pelanggan</a>

<table class="table table-bordered">
  <tr>
    <th>NO</th>
    <th>Nama Golongan</th>
    <th>No Pelanggan</th>
    <th>Nama</th>
    <th>alamat</th>
    <th>No HP</th>
    <th>KTP</th>
    <th>Seri</th>
    <th>Meteran</th>
    <th>Status</th>
    <th>User</th>
    <th>EDIT</th>
    <th>DELETE</th>
  </tr>
  <?php $no = 1; ?>
  @foreach ($data as $d)
  <tr>
    <td>{{ $no++ }}</td>
    <td>{{ $d->golongan->gol_nama }}</td>
    <td>{{ $d->pel_no }}</td>
    <td>{{ $d->pel_nama }}</td>
    <td>{{ $d->pel_alamat }}</td>
    <td>{{ $d->pel_hp }}</td>
    <td>{{ $d->pel_ktp }}</td>
    <td>{{ $d->pel_seri }}</td>
    <td>{{ $d->pel_meteran }}</td>
    <td>{{ $d->pel_aktif }}</td>
    <td>{{ $d->user->name }}</td>
    <td>
      <form action="{{ route('pel_edit', ['id' => $d->id]) }}" method="GET">
        <button type="submit" class="btn btn-primary">Edit</button>
      </form>
    </td>
    <td>
      <form action="{{ route('pel_delete', ['id' => $d->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
      </form>

    </td>
  </tr>
  @endforeach


</table>

@endsection