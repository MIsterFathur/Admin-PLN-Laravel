@extends('layouts.app')

@section('content')
<h2>Edit Golongan</h2>

<form action="{{ route('gol_update', ['id' => $data->id]) }}" method="post">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="">Kode Golongan</label>
        <input type="text" name="gol_kode" id="" class="form-control" value="{{ $data->gol_kode }}">
    </div>
    <div class="mb-3">
        <label for="">Nama Golongan</label>
        <input type="text" name="gol_nama" id="" class="form-control" value="{{ $data->gol_nama }}">
    </div>
    <div class="mb-3">
        <input type="submit" value="UPDATE" class="btn btn-primary">
    </div>
</form>

@endsection
