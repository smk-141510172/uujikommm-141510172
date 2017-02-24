<?php $__env->startSection('content'); ?>

                    <div class="panel-heading"><h3><center>Penggajian</center></h3> </div>
                    <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/penggajian')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <center>

                            <div class="col-md-12">
                                <label for="Jabatan">Nama Pegawai:</label>
                                    <select class="col-md-6 form-control" name="tunjangan_pegawai_id">
                                        <?php $__currentLoopData = $tunjangan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tunjangan): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                            <option  value="<?php echo e($tunjangan->id); ?>" ><?php echo e($tunjangan->Pegawai->User->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                    </select>
                                    <span class="help-block">
                                        <?php echo e($errors->first('tunjangan_pegawai_id')); ?>

                                    </span>
                                    <div>
                                        <?php if(isset($error)): ?>
                                            Check Lagi Gaji Sudah Ada
                                        <?php endif; ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.appp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>