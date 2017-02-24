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
                        <h5>Gaji Lembur&nbsp&nbsp: <?php echo 'RP.'.number_format($penggajian->jumlah_uang_lembur,2,",",".");?> <hr>Gaji Pokok&nbsp&nbsp&nbsp&nbsp: <?php echo 'RP.'.number_format($penggajian->gaji_pokok,2,",",".");?><hr>Tunjangan&nbsp&nbsp: <?php echo 'RP.'.number_format($penggajian->Tunjangan_pegawai->Tunjangan->besar_uang,2,",",".");?><hr>Total Gaji&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <?php echo 'RP.'.number_format($penggajian->total_gaji,2,",",".");?>



                        </h5>
                        
                                <a class="btn btn-success col-md-12" href="{{url('penggajian')}}">Kembali</a>
                                
                        </center>
                        </div> 
                        
                    </table>

@endsection