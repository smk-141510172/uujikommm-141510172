<?php $__env->startSection('penggajian'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="panel panel-success">
                <div class="panel-heading"></div>
                <div class="panel-body">
<h1><center>Penggajian</center></h1>
<div class="col-md-12">
                        <center><a href="<?php echo e(url('penggajian/create')); ?>" class="btn btn-success"><span class="fa fa-plus-circle"></span><br>Tambah</a></center>
                        <br>
                        <br>
                        <center><?php echo e($penggajian->links()); ?></center>
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

                        <?php 
                            $no=1 ;
                         ?>
                        <tbody>
                        <?php $__currentLoopData = $penggajian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penggajian): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr>
                        <td><?php echo e($no++); ?></td>                        
                        <td><?php echo e($penggajian->Tunjangan_pegawai->Pegawai->User->name); ?></td>
                        <td><?php echo e($penggajian->Tunjangan_pegawai->Pegawai->nip); ?></td>
                        <td><b><?php if($penggajian->tanggal_pengambilan == ""&&$penggajian->status_pengambilan == "0"): ?>
                            Gaji Belum Diambil
                        <?php elseif($penggajian->tanggal_pengambilan == ""||$penggajian->status_pengambilan == "0"): ?>
                            Gaji Belum Diambil
                        <?php else: ?>
                            Gaji Sudah Diambil Pada <?php echo e($penggajian->tanggal_pengambilan); ?>

                        <?php endif; ?></b></td>


                        </h5>

                        
                                <td><a class="btn btn-primary form-control" href="<?php echo e(route('penggajian.show',$penggajian->id)); ?>">Detail</a></td>
                                     <td><?php echo Form::open(['method'=>'DELETE','route'=>['penggajian.destroy',$penggajian->id]]); ?>

                                    <?php echo Form::submit('Delete',['class'=>'btn btn-danger col-md-12']); ?></td>

                                    <?php echo Form::close(); ?>

                                
                        </center>
                        </tr>
                        </div> 
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        
                    </table>
                </div>
                </div>


            </div>
            </div>
            </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>