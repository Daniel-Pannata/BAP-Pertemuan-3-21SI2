<?php
use App\Models\transkripakademik;

?>
@extends('layouts.app2')
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
@section('title','Transkrip Akademik')
@section('content')
    <div class= "container">
        <p style= "font-size: 48px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0 ; text-decoration: underline">transkrip_akademik</p>     
        <table style= "margin-top: 16px">
            <tr>

                <th>ID</th>
                <th>Student_ID</th>
                <th>Kode_matakuliah</th>
                <th>Kode_term</th>
                <th>Nilai</th>
                <th>SKS</th>
                <th>GPA</th>


            </tr>
            <?php
                $transkrip_akademiks = transkrip_akademik::all();
            ?>

            <tr>
            @foreach ($transkrip_akademiks as $transkrip_akademik) 
                <tr>
                    <td>
                        {{ $transkrip_akademik->Student_id }}
                    </td>
                    <td>
                        {{ $transkrip_akademik->Kode_matakuliah}}
                    </td>
                    <td>
                        {{ $transkrip_akademik->nilai}}
                    </td>
                    <td>
                        {{ $transkrip_akademik->sks}}
                    </td>
                    <td>
                        {{ $transkrip_akademik->gpa}}
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection