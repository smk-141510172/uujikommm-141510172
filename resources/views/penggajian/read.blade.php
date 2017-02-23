@extends('layouts.appp')
@section('penggajian')
    active
@endsection
@section('content')
<h1><center>INFORMASI GAJI</center></h1>
<hr></hr>
     <table class="table table-striped table-hover table-bordered">
                        
                        <div class="col-md-12">
                        
                        

                        <h3>Nama&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp{{$penggajian->Tunjangan_pegawai->Pegawai->User->name}}</h3>
                        <h3>NIP&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp{{$penggajian->Tunjangan_pegawai->Pegawai->nip}}</h3>
                        <h3>Status Gaji&nbsp:</h3><b>@if($penggajian->tanggal_pengambilan == ""&&$penggajian->status_pengambilan == "0")
                            <h4>Gaji Belum Diambil</h4>
                        @elseif($penggajian->tanggal_pengambilan == ""||$penggajian->status_pengambilan == "0")
                            <h4>Gaji Belum Diambil</h4>
                        @else
                            <h4>Gaji Sudah Diambil Pada {{$penggajian->tanggal_pengambilan}}</h4>
                        @endif</b>
                        <center>
                        <br>
                        <br>
                        <h2>Perhitungan Gaji Keseluruhan&nbsp:</h2>
                        <br>
                        <h5>Gaji Lembur&nbsp&nbsp: Rp.{{$penggajian->jumlah_uang_lembur}} <hr>Gaji Pokok&nbsp&nbsp&nbsp&nbsp: Rp.{{$penggajian->gaji_pokok}}<hr>Tunjangan&nbsp&nbsp: Rp.{{$penggajian->Tunjangan_pegawai->Tunjangan->besar_uang}} <hr>Total Gaji&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: Rp.{{$penggajian->total_gaji}}



                        </h5>
                        
                                <a class="btn btn-success col-md-12" href="{{url('penggajian')}}">Kembali</a>
                                
                        </center>
                        </div> 
                        
                    </table>

@endsection