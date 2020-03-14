<?php $__env->startSection('title','Detail Mahasiswa'); ?>

<?php $__env->startSection('container'); ?>
	<div class="container">
		<div class="row">
			<div class="col-10">
			<h1 class="mt-3">Detail Mahasiswa</h1>
            
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($student->nama); ?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?php echo e($student->email); ?></h6>
                <p class="card-text"><?php echo e($student->tanggal_lahir); ?></p>
                <p class="card-text"><?php echo e($student->no_telp); ?></p>
                <p class="card-text"><?php echo e($student->gender); ?></p>
                

                <a href ="<?php echo e($student->id); ?>/edit" class="btn btn-primary">Edit</a>
                <form action="/students/<?php echo e($student->id); ?>" method="post" class="d-inline">
                <?php echo method_field('delete'); ?>
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a href="/students" class="card-link">Kembali</a>
            </div>
            </div>


			</div>
		</div>	
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Work\htdocs\teskly\resources\views/students/show.blade.php ENDPATH**/ ?>