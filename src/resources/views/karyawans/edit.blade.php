@extends('layouts.app')
  
@section('title', 'Edit Karyawan')
  
@section('contents')
    <h1 class="mb-0">Edit Karyawan</h1>
    <hr />
    <form action="{{ route('karyawans.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">NIK</label>
                <input type="text" name="nik" class="form-control" placeholder="NIK" value="{{ $karyawan->nik }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $karyawan->nama }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Divisi</label>
                <input type="text" name="divisi" class="form-control" placeholder="Divisi" value="{{ $karyawan->divisi }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Jabatan</label>
                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="{{ $karyawan->jabatan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Gaji</label>
                <input type="text" name="gaji" class="form-control" placeholder="Gaji" value="{{ $karyawan->gaji }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection