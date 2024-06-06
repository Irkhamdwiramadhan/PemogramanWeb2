@extends('components.layout')
@section('content')

<h4>Data Kelurahan</h4>
<!-- @php
echo $kelurahan;
@endphp -->
<a href="{{ url('kelurahan/create') }}" class="btn btn-primary">+ Tambah Kelurahan</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Daerah</th>
            <th>Kecamatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kelurahan as $row)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->kecamatan}}</td>
            <td>
                <a href="{{ route('kelurahan.show', $row->id) }}" class="text-primary"><i class="far fa-eye"></i> Lihat</a> |
                <a href="#" class="text-warning"><i class="far fa-edit"></i> Edit</a> |
                <a href="#" class="text-danger"><i class="far fa-trash-alt"></i>Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection