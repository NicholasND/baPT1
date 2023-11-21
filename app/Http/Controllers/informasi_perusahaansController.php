<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class informasi_perusahaansController extends Controller
{
    //
    public function index()
    {
        //
        $$informasi_perusahaans = $informasi_perusahaans::where('id', '>', 90)->get();
        return view('$informasi_perusahaans')->with('$informasi_perusahaans',$$informasi_perusahaans);
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
