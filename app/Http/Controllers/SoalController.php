<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('kelas')->where('GuruID',Auth::user()->id )->get();
        return view('Guru.kelas', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        return view('Guru.FormSoal', ['id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        for($x = 1; $x <=5;$x++) {
            DB::table('soal')->insert([
                'KelasID' =>$request->id,
                'BAB' =>$request->BAB,
                'no_soal' =>$request->{"no_soal".$x},
                'Soal' =>$request->{"Soal".$x},
                'jawaban1' =>$request->{"jawaban1".$x},
                'jawaban2' =>$request->{"jawaban2".$x},
                'jawaban3' =>$request->{"jawaban3".$x},
                'jawaban4' =>$request->{"jawaban4".$x},
                'Kunci_Jawaban' =>$request->{"Kunci_Jawaban".$x},
                'Alasan' =>$request->{"Alasan".$x},
            ]);
        }
        return redirect(route('soal',['id'=>$request->id]))->with('success', 'Kelas berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = DB::table('soal')->where('KelasID',$id )->get();
        $dataKelas = DB::table('kelas')->where('id',$id )->first();
        return view('Guru.soal', ['data'=>$data,'kelas'=>$dataKelas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelas $kelas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        //
    }

    public function soalSiswa($id){
        $data = DB::table('soal')->where('KelasID',$id )->get();
        return view('Siswa.FormSoal', ['id'=>$id, 'data'=>$data]);
    }
}
