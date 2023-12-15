@extends('layouts.app')

@section('content')
<h2>Add Pelanggan</h2>

<form action="{{ route('pel_store') }}" method="post">
  @csrf
  <div class="mb-3">
    <label for="gol_id">Golongan</label>
    <select name="gol_id" id="" class="form-select">
      <option value="" selected disabled>Pilih Golongan</option>
      @foreach ($golongans as $golongan)
      <option value="{{ $golongan->id }}">{{ $golongan->gol_nama }}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label for="">No Pelanggan</label>
    <input type="text" name="pel_no" id="" class="form-control">
  </div>
  <div class="mb-3">
    <label for="">Nama</label>
    <input type="text" name="pel_nama" id="" class="form-control">
  </div>
  <div class="mb-3">
    <label for="">Alamat</label>
    <input type="text" name="pel_alamat" id="" class="form-control">
  </div>
  <div class="mb-3">
    <label for="">No HP</label>
    <input type="text" name="pel_hp" id="" class="form-control">
  </div>
  <div class="mb-3">
    <label for="">KTP</label>
    <input type="text" name="pel_ktp" id="" class="form-control">
  </div>
  <div class="mb-3">
    <label for="">Seri</label>
    <input type="text" name="pel_seri" id="" class="form-control">
  </div>
  <div class="mb-3">
    <label for="">Meteran</label>
    <input type="text" name="pel_meteran" id="" class="form-control">
  </div>
  <div class="mb-3">
    <label for="">Status</label>
    <select class="form-select" name="pel_aktif" id="" required>
      <option value="" selected disabled>Pilih Status</option>
      <option value="aktif">Aktif</option>
      <option value="non-aktif">Non Aktif</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="">User</label>
    <select class="form-select" name="user_id" id="" required>
      <option value="" selected disabled>Pilih user</option>
      @if ($users->count() > 0)
      @foreach ($users as $user)
      <option value="{{ $user->id }}">{{ $user->name }}</option>
      @endforeach
      @else
      <option value="" disabled>Tidak Ada User</option>
      @endif
    </select>
  </div>
  <div class="mb-3">
    <input type="submit" value="SAVE" class="btn btn-primary">
  </div>
</form>
@endsection
