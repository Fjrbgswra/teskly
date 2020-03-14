<?php $__env->startSection('title','Daftar Mahasiswa'); ?>

<?php $__env->startSection('container'); ?>
	<div class="container">
		<div class="row">
			<div class="col-10">
			<h1 class="mt-3">Daftar Mahasiswa</h1>
            <?php if(session('status')): ?>
            <div class="alert alert-success">
                <?php echo e(session('status')); ?>

            </div>
        <?php endif; ?>
            <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>

                <ul class="list-group">
                <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <?php echo e($student->nama); ?>

                    <a href="/students/<?php echo e($student->id); ?>" class="badge badge-info">Detail</a>
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
			</div>
		</div>	
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\htdocs\teskly\resources\views/students/index.blade.php ENDPATH**/ ?>