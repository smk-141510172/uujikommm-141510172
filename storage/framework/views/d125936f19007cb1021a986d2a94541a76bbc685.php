<?php $__env->startSection('penggajian'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1><center>Pencarian Menurut Pegawai</center></h1>
 <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading"></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="<?php echo e(url('query')); ?>" method="GET"">
                        <?php echo e(csrf_field()); ?>


                        

                        <div class="form-group<?php echo e($errors->has('q') ? ' has-error' : ''); ?>">
                            <label for="q" class="col-md-4 control-label">Pegawai</label>

                            <div class="col-md-6">
                                <select name="q" class="form-control">
                                    <option value="">pilih</option>
                                    <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($data->id); ?>"><?php echo e($data->nip); ?>&nbsp&nbsp<?php echo e($data->user->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </select>

                                <?php if($errors->has('q')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('q')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                       
                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success form-control">
                                    Cari
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content1'); ?>
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