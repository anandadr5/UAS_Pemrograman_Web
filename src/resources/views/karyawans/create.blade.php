@extends('layouts.app')
  
@section('title', 'Create Karyawan')
  
@section('contents')
    <h1 class="mb-0">Add Karyawan</h1>
    <hr />
    <form action="{{ route('karyawans.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nik" class="form-control" placeholder="NIK">
            </div>
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="divisi" class="form-control" placeholder="Divisi">
            </div>
            <div class="col">
                <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
            </div>
            <div class="col">
                <input type="text" name="gaji" class="form-control" placeholder="Gaji">
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection