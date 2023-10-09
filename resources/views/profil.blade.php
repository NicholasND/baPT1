@extends('layouts.app')
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

@section('title', 'Profil')
@section ('content')
<body>
    <h1>Profile</h1>
    <div class="table-container">
        <p> Nama : Nicholas Dickson </p>
        <p> Umur : 20 Tahun </p>
        <p> Student ID : 03081210020</p>
        <p> Email : nicholasdickson86@gmail.com </p>
        <p> Kelas : 21SI2</p>
        <p> Jurusan : Sistem Informasi</p>
        <p> Alamat : Jln Thamrin Baru no 68 Medan</p>
        <p> Universitas : Universitas Pelita Harapan</p>
    </div>
    <h2 align="left">Matakuliah</h2>
    <table border="1" width="700px" cellspacing="0">
        <thead>
            <tr>
                <th>Hari</th>
                <th>Jam</th>
                <th>Matakuliah</th>
                <th>Nama Dosen</th>
                <th>Kelas</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Senin</td>
                <td>17:30 - 20:10</td>
                <td>Accounting and Finance</td>
                <td>Lisa Salim</td>
                <td>Kelas 109</td>
            </tr>
            <tr>
                <td>Selasa</td>
                <td>17:30 - 21:00</td>
                <td>Pemrograman Aplikasi Bisnis</td>
                <td>Ade Maulana</td>
                <td>Kelas 101</td>
            </tr>
            <tr>
                <td>Rabu</td>
                <td>17:30 - 20:10</td>
                <td>Manajemen Strategis Perusahaan</td>
                <td>Romindo</td>
                <td>Kelas 101</td>
            </tr>
            <tr>
                <td>Kamis</td>
                <td>17:30 - 21:00</td>
                <td>Audit dan Kontrol Sistem Informasi</td>
                <td>Ade Maulana</td>
                <td>Kelas 101</td>
            </tr>
            <tr>
                <td>Jumat</td>
                <td>17:30 - 20:10</td>
                <td>Pemasaran digital</td>
                <td>Okky Barus</td>
                <td>Kelas 109</td>
            </tr>
            <tr>
                <td>Sabtu</td>
                <td>13:00 - 15:30</td>
                <td>Sistem Informasi Perusahaan</td>
                <td>Ade Maulana</td>
                <td>Kelas 101</td>
            </tr>
        </tbody>
    </table>
</body>
</html>

@endsection