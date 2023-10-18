<?php
use App\Models\program_studi;

?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
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
<?php $__env->startSection('title','Program Studi'); ?>
<?php $__env->startSection('content'); ?>
    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0 ; text-decoration: underline">program_studi</p>     
        <table style= "margin-top: 16px">
            <tr>

                <th>Nama</th>
                <th>Deskripsi</th>


            </tr>
            <?php
                $program_studis = program_studi::all();
            ?>

            <tr>
            <?php $__currentLoopData = $program_studis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $program_studi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <tr>
                    <td>
                        <?php echo e($program_studi->nama); ?>

                    </td>
                    <td>
                        <?php echo e($program_studi->Deskripsi); ?>

                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lab 101\nama_project\resources\views/program_studi.blade.php ENDPATH**/ ?>