@extends('layouts.appp')
@section('jabatan')
    active
@endsection
@section('content')

<div class="panel panel-success">
                <div class="panel-heading"></div>
                <div class="panel-body">
                <h1><center>Daftar Jabatan</center></h1>
<center><a  href="{{url('jabatan/create')}}" class="btn btn-success"><span class="fa fa-plus-circle"></span><br>Tambah</a></center>
<hr>
</hr>
	<table border="1" class="table table-striped table-bordered table-hover">
		<thead>
			<tr class="bg-success">
				<th>No</th>
				<th>Kode Jabatan</th>
				<th>Nama Jabatan</th>
				<th>Besar Uang</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		@php $no=1; @endphp
		<tbody>
			@foreach($jabatan as $data)
			<tr>
				<td>{{$no++}}</td>
				<td>{{$data->kode_j}}</td>
				<td>{{$data->nama_j}}</td>
				<td><?php echo 'RP.'.number_format($data->besar_uang,2,",",".");?></td>
				<td>
					<a href="{{route('jabatan.edit',$data->id)}}" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					{!! Form::open(['method'=>'DELETE','route'=>['jabatan.destroy',$data->id]]) !!}
					{!! Form::submit('Delete',['class'=>'btn btn-danger']) !!}
					{!! Form::close() !!}
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	</div>
	</div>

@endsection