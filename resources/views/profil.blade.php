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
        <h1 align="left">Program Studi</h1>
        <table border="1" width="700px" cellspacing="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Program Studi</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>100810015</td>
                    <td>Sistem Informasi</td>
                    <td>Pembelajaran tentang teknologi sistem informasi</td>
                </tr>
                <tr>
                    <td>100810016</td>
                    <td>Teknologi Informasi</td>
                    <td>Pembelajaran tentang teknologi informasi yang dipake</td>
                </tr>
                <tr>
                    <td>100810017</td>
                    <td>Hospitality</td>
                    <td>Pembelajaran tentang service dan manajemen pekerjaan</td>
                </tr>
                <tr>
                    <td>100810017</td>
                    <td>Manajemen</td>
                    <td>Pembelajaran tentang manajemen dalam beberapa aspek pekerjaan</td>
                </tr>
            </tbody>
    </table>
        <body>
            <h2 align="left">Pembayaran</h2>
            <table border="1" width="700px" cellspacing="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Student id</th>
                        <th>Amount</th>
                        <th>Payment date</th>
                        <th>Payment method</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>081229810</td>
                        <td>080112340</td>
                        <td>$450.000</td>
                        <td>23/10/2015</td>
                        <td>BCA</td>
                    </tr>
                    <tr>
                        <td>081229820</td>
                        <td>080112356</td>
                        <td>$950.000</td>
                        <td>15/5/2017</td>
                        <td>Bank Mandiri</td>
                    </tr>
                    <tr>
                        <td>081229830</td>
                        <td>080112321</td>
                        <td>$623.000</td>
                        <td>5/8/2020</td>
                        <td>BNI</td>
                    </tr>
                    <tr>
                        <td>081229840</td>
                        <td>080112315</td>
                        <td>$700.000</td>
                        <td>10/9/2015</td>
                        <td>BCA</td>
                    </tr>
                    <tr>
                        <td>081229843</td>
                        <td>080112338</td>
                        <td>$875.000</td>
                        <td>27/3/2017</td>
                        <td>Bank Mandiri</td>
                    </tr>
                </tbody>
</table>
<body>
    <h3 align="left">Transkrip Akademik</h3>
    <table border="1" width="700px" cellspacing="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Student ID</th>
                <th>Kode Matakuliah</th>
                <th>Kode term</th>
                <th>Nilai</th>
                <th>Sks</th>
                <th>Gpa</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>20014740</td>
                <td>08415580</td>
                <td>86623144</td>
                <th>75523223</th>
                <th>90</th>
                <th>3</th>
                <th>3.5</th>
            </tr>
            <tr>
                <td>20014750</td>
                <td>08415584</td>
                <td>86623145</td>
                <th>75523224</th>
                <th>85</th>
                <th>2</th>
                <th>3</th>
            </tr>
            <tr>
                <td>20014760</td>
                <td>08415585</td>
                <td>86623146</td>
                <th>75523227</th>
                <th>90</th>
                <th>3</th>
                <th>3.5</th>
            </tr>
            <tr>
                <td>20014770</td>
                <td>08415586</td>
                <td>86623147</td>
                <th>75523228</th>
                <th>95</th>
                <th>4</th>
                <th>3.5</th>
            </tr>
            <tr>
                <td>20014780</td>
                <td>08415587</td>
                <td>86623148</td>
                <th>75523229</th>
                <th>90</th>
                <th>3</th>
                <th>3.5</th>
            </tr>
        </tbody>
    </table>
</body>
</html>

@endsection