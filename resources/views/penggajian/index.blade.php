@extends('layouts.appp')
@section('penggajian')
    active
@endsection
@section('content')
<div class="panel panel-success">
                <div class="panel-heading"></div>
                <div class="panel-body">
<h1><center>Penggajian</center></h1>
<div class="col-md-12">
                        <center><a href="{{url('penggajian/create')}}" class="btn btn-success"><span class="fa fa-plus-circle"></span><br>Tambah</a></center>
                        <br>
                        <br>
                        <center>{{$penggajian->links()}}</center>
                    </div>
                    <table class="table table-striped table-hover table-bordered">

                        <thead>
                        <tr class="bg-success">
                        <th>no</th>
                        <th>nama pegawai</th>
                        <th>nip pegawai</th> 
                        <th>status pengambilan</th>
                        <th colspan="3">Opsi</th>
                        </tr>
                        </thead>

                        @php
                            $no=1 ;
                        @endphp
                        <tbody>
                        @foreach($penggajian as $penggajian)
                        <tr>
                        <td>{{$no++}}</td>                        
                        <td>{{$penggajian->Tunjangan_pegawai->Pegawai->User->name}}</td>
                        <td>{{$penggajian->Tunjangan_pegawai->Pegawai->nip}}</td>
                        <td><b>@if($penggajian->tanggal_pengambilan == ""&&$penggajian->status_pengambilan == "0")
                            Gaji Belum Diambil
                        @elseif($penggajian->tanggal_pengambilan == ""||$penggajian->status_pengambilan == "0")
                            Gaji Belum Diambil
                        @else
                            Gaji Sudah Diambil Pada {{$penggajian->tanggal_pengambilan}}
                        @endif</b></td>


                        </h5>

                        
                                <td><a class="btn btn-primary form-control" href="{{route('penggajian.show',$penggajian->id)}}">Detail</a></td>
                                     <td>{!!Form::open(['method'=>'DELETE','route'=>['penggajian.destroy',$penggajian->id]])!!}
                                    {!!Form::submit('Delete',['class'=>'btn btn-danger col-md-12'])!!}</td>

                                    {!!Form::close()!!}
                                
                        </center>
                        </tr>
                        </div> 
                        @endforeach
                        
                    </table>
                </div>
                </div>


            </div>
            </div>
            </div>

@endsection