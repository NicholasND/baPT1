<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daftar_produkController extends Controller
{
    //
    public function index()
    {
        //
        $$daftar_produk = $daftar_produk::where('id', '>', 90)->get();
        return view('$daftar_produk')->with('$daftar_produk',$$daftar_produk);
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
