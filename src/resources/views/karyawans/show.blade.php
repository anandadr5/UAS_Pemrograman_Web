@extends('layouts.app')
  
@section('title', 'Show Karyawan')
  
@section('contents')
    <h1 class="mb-0">Detail Karyawan</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">NIK</label>
            <input type="text" name="nik" class="form-control" placeholder="NIK" value="{{ $karyawan->nik }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $karyawan->nama }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Divisi</label>
            <input type="text" name="divisi" class="form-control" placeholder="Divisi" value="{{ $karyawan->divisi }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" placeholder="Jabatan" value="{{ $karyawan->jabatan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Gaji</label>
            <input type="text" name="gaji" class="form-control" placeholder="Gaji" value="{{ $karyawan->gaji }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $karyawan->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $karyawan->updated_at }}" readonly>
        </div>
    </div>
@endsection