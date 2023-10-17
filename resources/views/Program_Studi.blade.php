<?php
use App\Models\Program_Studi;
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
@section('title','Program_Studi')
@section('content')
    <div class= "container">
        <p style= "font-size: 36px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0">MATA KULIAH</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>Nama Program Studi</th>
                <th>Deskripsi</th>
            </tr>
            <?php
                $Program_Studis = program_studi::all();
            ?>

            <tr>
            @foreach ($Program_Studis as $Program_Studi) 
                <tr>
                    <td>
                        {{ $Program_Studi->id }}
                    </td>
                    <td>
                        {{ $Program_Studi->NamaProgramStudi}}
                    </td>
                    <td>
                        {{ $Program_Studi->Deskripsi}}
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection
                        