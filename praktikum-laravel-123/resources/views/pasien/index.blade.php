@extends('components.layout')
@section('content')

<h4>Data Pasien</h4>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>kode</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Email</th>
            <th>alamat</th>
            <th>Kelurahan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pasien as $row)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$row->kode}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->tmp_lahir}}</td>
            <td>{{$row->tgl_lahir}}</td>
            <td>{{$row->gender}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->alamat}}</td>
            <td>{{$row->kelurahan_id}}</td>
        </tr>
        @endforeach
    </tbody>
    {{-- <tbody>
        @foreach($kelurahan as $row)
        <tr>
            <td>{{$no++}}</td>
    <td>{{$row->nama}}</td>
    <td>{{$row->kecamatan}}</td>
    </tr>
    @endforeach
    </tbody> --}}
</table>
@endsection