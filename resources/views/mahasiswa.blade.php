<?php
use App\Models\mahasiswa;
?>
@extends('layouts.app')
@section('title','Mahasiswa')
@section('content')
<div>
    <p style="text-align:center; font-size: 48px; margin-top:36px; font-weight: bold">DATA MAHASISWA</p>
    <div class="container" style="max-width:70%">
        <div class="row bold-font">
            <tr>
                <th>ID</th>
                <th>StudentID</th>
                <th>Nama</th>
                <th>Jurusan</th>
            </tr>
            <tr>
                <?php
                    $mahasiswas = mahasiswa::all();
                    foreach ($mahasiswas as $mahasiswa) 
                    <tr>
                        <td>{{ $mahasiswa->id}}</td>
                        <td>{{ $mahasiswa->studentID}}</td>
                        <td>{{ $mahasiswa->nama}}</td>
                        <td>{{ $mahasiswa->jurusan}}</td>
                    </tr>
                    @endforeach
                ?>
            <tr>
            <div class="col-3">
                Nama
            </div>
            <div class="col-9">
                : Nicholas Dickson
            </div>
        </div>
        <div class="row bold-font">
            <div class="col-3">
                NIM
            </div>
            <div class="col-9">
                : 03081210020
            </div>
        </div>
        <div class="row bold-font">
            <div class="col-3">
                Kelas
            </div>
            <div class="col-9">
                : 21SI2
            </div>
        </div>
        <div class="row bold-font">
            <div class="col-3">
                Jurusan
            </div>
            <div class="col-9">
                : Sistem Informasi
            </div>
        </div>
    </div>
@endsection
<link href ="https//cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stlyesheet">
    <style>
        th {
            border: 1px solid black;
            padding: 8px;
            font-weight: bold;
            text-align: center;
        }
        td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        .bold-font {
            font-weight: bold;
        }
        </style>
<html>
    <head>
        <title>Profil Saya</title>
    </head>
    <body>
        <h1>Profil Biodata</h1>
        <h2>Nama : Nicholas Dickson</h2>
        <h3>NIM : 03081210020</h3>
        <h4>Kelas : 21SI2</h4>
        <h5>Jurusan : Sistem Informasi</h5>
    </body>
<html>