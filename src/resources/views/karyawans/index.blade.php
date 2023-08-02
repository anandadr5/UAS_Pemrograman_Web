@extends('layouts.app')
  
@section('title', 'Home Karyawan')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Karyawan</h1>
        <a href="{{ route('karyawans.create') }}" class="btn btn-primary">Add Karyawan</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>ID</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Divisi</th>
                <th>Jabatan</th>
                <th>Gaji</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($karyawan->count() > 0)
                @foreach($karyawan as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nik }}</td>
                        <td class="align-middle">{{ $rs->nama }}</td>
                        <td class="align-middle">{{ $rs->divisi }}</td>
                        <td class="align-middle">{{ $rs->jabatan }}</td>
                        <td class="align-middle">{{ $rs->gaji }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('karyawans.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('karyawans.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('karyawans.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Karyawan not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection