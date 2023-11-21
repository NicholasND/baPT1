<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswa;
use PDF;

class laporanMahasiswa extends Controller
{
    //
    public function index()
    {
        //tarik data mahasiswa
        $mahasiswa = mahasiswa::all();
        return view('laporan/mahasiswa',['mahasiswa'=>$mahasiswa]);
    }

    //
    public function create()
    {
        //Create new resource
    }

    //

    public function store(Request $request)
    {
        //Store newly created storage
    }

    //
    public function show(string $id)
    {
        //Display resource 
    }

    //
    public function edit(string $id)
    {
        //Show edit form for resource
    }

    //
    public function update(Request $request, string $id)
    {
        //Update resource
    }

    public function destroy(string $id)
    {
        //
    }
}
