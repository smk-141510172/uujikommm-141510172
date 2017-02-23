<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">SELAMAT DATANG</div>

                <div class="panel-body">
                   PERINGATAN
                   &nbsp&nbsp HANYA ADMIN YANG BISA MENGAKSES SEMUA DATA
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.apppp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>