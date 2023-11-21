<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informasi_pelangganController extends Controller
{
    //
    public function index()
    {
        //
        $$informasi_pelanggan = $informasi_pelanggan::where('id', '>', 90)->get();
        return view('$informasi_pelanggan')->with('$informasi_pelanggan',$$informasi_pelanggan);
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