<?php

namespace App\Http\Controllers;

use App\Models\Soal;
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

    public function bab2($id)
    {
        return view('Siswa.bab2',['id' => $id]);
    }
    public function bab3($id)
    {
        return view('Siswa.bab3',['id' => $id]);
    }
    public function bab4($id)
    {
        return view('Siswa.bab4',['id' => $id]);
    }
    public function bab5($id)
    {
        return view('Siswa.bab5',['id' => $id]);
    }
    public function bab1($id)
    {
        $soal = Soal::getSoal1();
        return view('Siswa.bab1',['id' => $id,'data' => $soal]);
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
