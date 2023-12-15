@extends('layouts.app')

@section('content')

<h2>Golongan</h2>

<a href="{{ route('gol_create') }}" class="btn btn-primary mb-3 float-end">Add Golongan</a>

<table class="table table-bordered">
    <tr>
        <th>NO</th>
        <th>Kode Golongan</th>
        <th>Nama Golongan</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php $no = 1; ?>
    @foreach ($data as $golongan)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $golongan->gol_kode }}</td>
        <td>{{ $golongan->gol_nama }}</td>
        <td>
           <form action="{{ route('gol_edit', ['id' => $golongan->id]) }}" method="GET">
                <button type="submit" class="btn btn-primary">Edit</button>
           </form>
        </td>
        <td>
            <form action="{{ route('gol_delete', ['id' => $golongan->id]) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>

        </td>
    </tr>
@endforeach


</table>

@endsection
