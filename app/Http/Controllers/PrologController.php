<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrologController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Siswa.prolog',['id' => 1]);
    }

    public function bab2()
    {
        return view('Siswa.bab2',['id' => 1]);
    }
    public function bab3()
    {
        return view('Siswa.bab3',['id' => 1]);
    }
    public function bab4()
    {
        return view('Siswa.bab4',['id' => 1]);
    }
    public function bab5()
    {
        return view('Siswa.bab5',['id' => 1]);
    }
    public function bab1()
    {
        return view('Siswa.bab1',['id' => 1]);
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
