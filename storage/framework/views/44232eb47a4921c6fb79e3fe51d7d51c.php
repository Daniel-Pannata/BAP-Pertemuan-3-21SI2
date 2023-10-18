
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        th {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
        td {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
    </style>
<?php $__env->startSection('title','Mahasiswa'); ?>
<?php $__env->startSection('content'); ?>
    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0 ; text-decoration: underline">DATA MAHASISWA</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>StudentID</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Tahun Masuk</th>
            </tr>

            <tr>
            <?php $__currentLoopData = $mahasiswas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <tr>
                    <td>
                        <?php echo e($mahasiswa->id); ?>

                    </td>
                    <td>
                        <?php echo e($mahasiswa->studentID); ?>

                    </td>
                    <td>
                        <?php echo e($mahasiswa->nama); ?>

                    </td>
                    <td>
                        <?php echo e($mahasiswa->jurusan); ?>

                    </td>
                    <td>
                        <?php echo e($mahasiswa->tahunMasuk); ?>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lab 101\nama_project\resources\views/mahasiswa.blade.php ENDPATH**/ ?>