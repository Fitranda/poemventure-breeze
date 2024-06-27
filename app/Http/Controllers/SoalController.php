<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Soal;
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
    public function buatsoal($id)
    {
        return view('Guru.FormSoal', ['id'=>$id, 'jumlah'=>0]);
    }

    public function jumlahsoal($id,Request $request)
    {
        return view('Guru.FormSoal', ['id'=>$id, 'jumlah'=>$request->jmlsoal]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function simpan(Request $request)
    {
        for($x = 1; $x <=$request->jumlahsoal;$x++) {
            Soal::SimpanSoal($request, $x);
        }
        return redirect(route('soal',['id'=>$request->id]))->with('success', 'Soal berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function tampilsoal($id)
    {
        $data = Soal::getDataSoalGuru(['KelasID'=>$id]);
        $dataKelas = Kelas::getDataKelasGuruFirst($id);
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
        // $data = DB::table('soal')->where('KelasID',$id )->get();
        $data = Kelas::getSoal();
        // var_dump($data);die;
        return view('Siswa.FormSoal', ['id'=>$id, 'data'=>$data]);
    }
}
