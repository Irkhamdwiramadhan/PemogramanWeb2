@extends('components.layout')
@section('content')

<h4>Data Kelurahan</h4>
<!-- @php
echo $kelurahan;
@endphp -->
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Daerah</th>
            <th>Kecamatan</th>
        </tr>
    </thead>
    <tbody>
        @foreach($kelurahan as $row)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$row->nama}}</td>
            <td>{{$row->kecamatan}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection