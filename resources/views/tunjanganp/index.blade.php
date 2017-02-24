@extends('layouts.appp')
@section('tunjanganp')
    active
@endsection
@section('content')
<h1><center>Daftar Tunjangan Pegawai</center></h1>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr class=bg-success>
				<th>No</th>
				<th>Kode Kategori Tunjangan</th>
				<th>Nama Pegawai</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($tunjanganp as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->Tunjangan->kode_t}}</td>
				<td>{{$data->pegawai->user->name}}</td>
				
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['tunjanganp.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a  href="{{url('tunjanganp/create')}}" class="btn btn-success form-control">Tambah</a>

@endsection