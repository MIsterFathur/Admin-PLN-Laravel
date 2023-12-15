@extends('layouts.app')

@section('content')
<h2>Edit Data Pelanggan</h2>

<form action="{{ route('pel_update', ['id' => $data->id]) }}" method="post">
  @method('PUT')
  @csrf
  <div class="mb-3">
    <label for="">Golongan</label>
    <select name="gol_id" class="form-select" required id="">
      @foreach ($golongans as $golongan)
      <option value="{{ $golongan->id }}" {{ $data->golongan->id == $golongan->id ? 'selected' : '' }}>
        {{ $golongan->gol_nama }}
      </option>
      @endforeach
    </select>
  </div>

  <div class="mb-3">
    <label for="">No Pelanggan</label>
    <input type="text" name="pel_no" id="" class="form-control" value="{{ $data->pel_no }}" required>
  </div>
  <div class="mb-3">
    <label for="">Nama</label>
    <input type="text" name="pel_nama" id="" class="form-control" value="{{ $data->pel_nama }}" required>
  </div>
  <div class="mb-3">
    <label for="">Alamat</label>
    <input type="text" name="pel_alamat" id="" class="form-control" value="{{ $data->pel_alamat }}" required>
  </div>
  <div class="mb-3">
    <label for="">No HP</label>
    <input type="text" name="pel_hp" id="" class="form-control" value="{{ $data->pel_hp }}" required>
  </div>
  <div class="mb-3">
    <label for="">KTP</label>
    <input type="text" name="pel_ktp" id="" class="form-control" value="{{ $data->pel_ktp }}" required>
  </div>
  <div class="mb-3">
    <label for="">Seri</label>
    <input type="text" name="pel_seri" id="" class="form-control" value="{{ $data->pel_seri }}" required>
  </div>
  <div class="mb-3">
    <label for="">Meteran</label>
    <input type="text" name="pel_meteran" id="" class="form-control" value="{{ $data->pel_meteran }}" required>
  </div>
  <div class="mb-3">
    <label for="">Status</label>
    <select name="pel_aktif" class="form-select" id="" required>
      <option value="aktif" {{ $data->pel_aktif == 'aktif' ? 'selected' : '' }}>Aktif</option>
      <option value="non-aktif" {{ $data->pel_aktif == 'non-aktif' ? 'selected' : '' }}>Non Aktif</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="">User</label>
    <select name="user_id" class="form-select" id="" required>
      @if ($users->count() > 0)
      @foreach ($users as $user)
      <option value="{{ $user->id }}" {{ $data->user_id == $user->id ? 'selected' : '' }}>
        {{ $user->name }}
      </option>
      @endforeach
      @else
      <option value="" disabled>Tidak ada user</option>
      @endif
    </select>
  </div>
  <div class="mb-3">
    <input type="submit" value="UPDATE" class="btn btn-primary">
  </div>
</form>

@endsection