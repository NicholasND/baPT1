<?php
use App\Models\Pembayaran;
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
@section('title','Pembayaran')
@section('content')
    <div class= "container">
        <p style= "font-size: 36px ; font-weight: bold ; text-align: start ; margin: 40px 0 0 0">MATA KULIAH</p>     
        <table style= "margin-top: 16px">
            <tr>
                <th>ID</th>
                <th>Student_id</th>
                <th>Amount</th>
                <th>Payment_date</th>
                <th>Payment_method</th>
            </tr>
            <?php
                $Pembayaran = pembayaran::all();
            ?>

            <tr>
            @foreach ($Pembayaran as $Pembayaran) 
                <tr>
                    <td>
                        {{ $Pembayaran->id }}
                    </td>
                    <td>
                        {{ $Pembayaran->student_id}}
                    </td>
                    <td>
                        {{ $Pembayaran->amount}}
                    </td>
                    <td>
                        {{ $Pembayaran->payment_date}}
                    </td>
                    <td>
                        {{ $Pembayaran->payment_method}}
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection
                        