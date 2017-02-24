
@extends('layouts.appp')

@section('content')

                    <div class="panel-heading"><h3><center>Penggajian</center></h3> </div>
                    <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/penggajian') }}">
                        {{ csrf_field() }}
                        <center>

                            <div class="col-md-12">
                                <label for="Jabatan">Nama Pegawai:</label>
                                    <select class="col-md-6 form-control" name="tunjangan_pegawai_id">
                                        @foreach($tunjangan as $tunjangan)
                                            <option  value="{{$tunjangan->id}}" >{{$tunjangan->Pegawai->User->name}}</option>
                                        @endforeach
                                    </select>
                                    <span class="help-block">
                                        {{$errors->first('tunjangan_pegawai_id')}}
                                    </span>
                                    <div>
                                        @if(isset($error))
                                            Check Lagi Gaji Sudah Ada
                                        @endif
                                    </div>
                            </div>
                            <div class="col-md-12"></div>

                            <div class="col-md-12" >
                                <button type="submit" class="btn btn-primary form-control">Tambah</button>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </form>

@endsection
