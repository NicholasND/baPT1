<?php
use App\Models\Transkrip_Akademik;
?>
@extends('layouts.app')
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
@section('title','Transkrip_Akademik')
@section('content')
    <div class= "container">
        <p style= "font-size: 36px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0">MATA KULIAH</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>Student_id</th>
                <th>Kode_matakuliah</th>
                <th>Kode_term</th>
                <th>Nilai</th>
                <th>Sks</th>
                <th>Gpa</th>
            </tr>
            <?php
                $Transkrip_Akademiks = transkrip_akademik::all();
            ?>

            <tr>
            @foreach ($Transkrip_Akademiks as $Transkrip_Akademik) 
                <tr>
                    <td>
                        {{ $Transkrip_Akademik->id }}
                    </td>
                    <td>
                        {{ $Transkrip_Akademik->student_id }}
                    </td>
                    <td>
                        {{ $Transkrip_Akademik->kode_matakuliah }}
                    </td>
                    <td>
                        {{ $Transkrip_Akademik->kode_term }}
                    </td>
                    <td>
                        {{ $Transkrip_Akademik->nilai }}
                    </td>
                    <td>
                        {{ $Transkrip_Akademik->sks}}
                    </td>
                    <td>
                        {{ $Transkrip_Akademik->Gpa}}
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection