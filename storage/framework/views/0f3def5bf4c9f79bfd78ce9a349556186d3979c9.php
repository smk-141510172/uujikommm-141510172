<?php $__env->startSection('tunjanganp'); ?>
    active
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<h1><center>Daftar Tunjangan Pegawai</center></h1>
	<table border="1" class="table table-striped table-border table-hover">
		<thead>
			<tr class=bg-success>
				<th>No</th>
				<th>Kode Kategori Tunjangan</th>
				<th>Nama Pegawai</th>
				<th colspan="2"><center>Action</center></th>
			</tr>
		</thead>
		<?php  $no=1;  ?>
		<tbody>
			<?php $__currentLoopData = $tunjanganp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
			<tr>
				<td><?php echo e($no++); ?></td>
				<td><?php echo e($data->Tunjangan->kode_t); ?></td>
				<td><?php echo e($data->pegawai->user->name); ?></td>
				
				<td>
					<?php echo Form::open(['method'=>'DELETE','route'=>['tunjanganp.destroy',$data->id]]); ?>

					<?php echo Form::submit('Delete',['class'=>'btn btn-danger']); ?>

					<?php echo Form::close(); ?>

				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
		</tbody>
	</table>
	<a  href="<?php echo e(url('tunjanganp/create')); ?>" class="btn btn-success form-control">Tambah</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>