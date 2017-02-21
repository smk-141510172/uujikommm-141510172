@extends('layouts.appp')
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
				<td>{{$data->kode_tunjangan_id}}</td>
				<td>{{$data->pegawai->user->name}}</td>
				<td>
					<a href="{{route('tunjanganp.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['tunjanganp.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<a  href="{{url('tunjanganp/create')}}" class="btn btn-success form-control">Add</a>

@endsection