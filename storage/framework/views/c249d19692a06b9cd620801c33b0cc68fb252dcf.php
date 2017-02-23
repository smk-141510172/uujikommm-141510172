<?php $__env->startSection('jabatan'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="panel panel-success">
                <div class="panel-heading"></div>
                <div class="panel-body">
                <h1><center>Daftar Jabatan</center></h1>
<center><a  href="<?php echo e(url('jabatan/create')); ?>" class="btn btn-success"><span class="fa fa-plus-circle"></span><br>Tambah</a></center>
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
		<?php  $no=1;  ?>
		<tbody>
			<?php $__currentLoopData = $jabatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<td><?php echo e($no++); ?></td>
				<td><?php echo e($data->kode_j); ?></td>
				<td><?php echo e($data->nama_j); ?></td>
				<td><?php echo 'RP.'.number_format($data->besar_uang,2,",",".");?></td>
				<td>
					<a href="<?php echo e(route('jabatan.edit',$data->id)); ?>" class='btn btn-warning'> Edit </a>
				</td>
				<td>
					<?php echo Form::open(['method'=>'DELETE','route'=>['jabatan.destroy',$data->id]]); ?>

					<?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>

					<?php echo Form::close(); ?>

				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</tbody>
	</table>
	</div>
	</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>