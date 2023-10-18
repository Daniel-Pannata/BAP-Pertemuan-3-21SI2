
<head>
    <style>
        th {
            border: 1px solid;
            text-align: center;
            padding: 12px;
        }
        td {
            border: 1px solid;
            text-align: center;
        }
        p{
            margin: 10;
        }
    </style>
</head>

<?php $__env->startSection('title', 'Profil'); ?>
<?php $__env->startSection('content'); ?>
<body>
    <h1>Profile</h1>
    <div class="table-container">
        <p> Nama        : Daniel Pannata </p>
        <p> Umur        : 20 Tahun </p>
        <p> Student ID  : 03081210004</p>
        <p> Email       : danielpannata1@gmail.com </p>
        <p> Kelas       : 21SI2</p>
        <p> Alamat      : </p>
        <p> Universitas : Universitas Pelita Harapan</p>
    </div>
    <h2 align="left">Matakuliah</h2>
    <table border="1" width="700px" cellspacing="0">
        <thead>
            <tr>
                <th>Hari</th>
                <th>Jam</th>
                <th>Matakuliah</th>
                <th>Dosen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Senin</td>
                <td>17:30 - 20:10</td>
                <td>Accounting and Finance</td>
                <td>Ms Lisa</td>
            </tr>
            <tr>
                <td>Selasa</td>
                <td>17:30 - 21:00</td>
                <td>Bisnis Aplikasi Programing</td>
                <td>Ade Maulana</td>
            </tr>
            <tr>
                <td>Rabu</td>
                <td>17:30 - 20:10</td>
                <td>Manajemen Strategi Perusahaan</td>
                <td>Romindo</td>
            </tr>
            <tr>
                <td>Kamis</td>
                <td>17:30 - 21:00</td>
                <td>Audit dan Kontrol Sistem Informasi</td>
                <td>Ade Maulana</td>
            </tr>
            <tr>
                <td>Jumat</td>
                <td>17:30 - 20:10</td>
                <td>Digital Marketing</td>
                <td>Okky Barus</td>
            </tr>
            <tr>
                <td>Sabtu</td>
                <td>13:00 - 15:00</td>
                <td>Sistem Informasi Perusahaan</td>
                <td>Ade Maulana</td>
            </tr>
        </tbody>
    </table>
</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Lab 101\nama_project\resources\views/profil.blade.php ENDPATH**/ ?>