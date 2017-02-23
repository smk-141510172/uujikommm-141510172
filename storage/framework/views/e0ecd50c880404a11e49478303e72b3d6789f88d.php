<?php $__env->startSection('penggajian'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1><center>INFORMASI GAJI</center></h1>
<hr></hr>
     <table class="table table-striped table-hover table-bordered">
                        
                        <div class="col-md-12">
                        
                        

                        <h3>Nama&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo e($penggajian->Tunjangan_pegawai->Pegawai->User->name); ?></h3>
                        <h3>NIP&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<?php echo e($penggajian->Tunjangan_pegawai->Pegawai->nip); ?></h3>
                        <h3>Status Gaji&nbsp:</h3><b><?php if($penggajian->tanggal_pengambilan == ""&&$penggajian->status_pengambilan == "0"): ?>
                            <h4>Gaji Belum Diambil</h4>
                        <?php elseif($penggajian->tanggal_pengambilan == ""||$penggajian->status_pengambilan == "0"): ?>
                            <h4>Gaji Belum Diambil</h4>
                        <?php else: ?>
                            <h4>Gaji Sudah Diambil Pada <?php echo e($penggajian->tanggal_pengambilan); ?></h4>
                        <?php endif; ?></b>
                        <center>
                        <br>
                        <br>
                        <h2>Perhitungan Gaji Keseluruhan&nbsp:</h2>
                        <br>
                        <h5>Gaji Lembur&nbsp&nbsp: Rp.<?php echo e($penggajian->jumlah_uang_lembur); ?> <hr>Gaji Pokok&nbsp&nbsp&nbsp&nbsp: Rp.<?php echo e($penggajian->gaji_pokok); ?><hr>Tunjangan&nbsp&nbsp: Rp.<?php echo e($penggajian->Tunjangan_pegawai->Tunjangan->besar_uang); ?> <hr>Total Gaji&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: Rp.<?php echo e($penggajian->total_gaji); ?>




                        </h5>
                        
                                <a class="btn btn-success col-md-12" href="<?php echo e(url('penggajian')); ?>">Kembali</a>
                                
                        </center>
                        </div> 
                        
                    </table>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>