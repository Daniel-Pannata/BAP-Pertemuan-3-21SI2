<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\program_studi;

class program_studiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $program_studis = program_studi::get();
        return view('program_studi')->with('program_studis', $program_studis);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
