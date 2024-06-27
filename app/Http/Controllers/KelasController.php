<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampilkelas()
    {
        $where = ['GuruID'=>Auth::user()->id];
        $data = Kelas::getDataKelasGuru($where);
        return view('Guru.kelas', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambahkelasguru()
    {
        return view('Guru.FormKelas', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function simpankelasguru(Request $request)
    {
        $request->validate([
            'Nama' => ['required', 'string', 'max:255'],
            'Deskripsi' => ['required', 'string'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);


        $code = Str::random(10);

        while (Kelas::where('kode_kelas', $code)->exists()) {
            $code = Str::random(10);
        }

        $params =[
            'kode_kelas' => $code,
            'Nama' => $request->Nama,
            'Deskripsi' => $request->Deskripsi,
            'GuruID' => Auth::user()->id,
            'password' => Hash::make($request->password),
        ];

        Kelas::simpankelasguru($params);

        return redirect(route('kelasguru'))->with('success', 'Kelas berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function detailkelasguru($id)
    {
        $data_kelas = Kelas::getDataKelasGuruFirst($id);
        return view('Guru.DetailKelas', ['kelas'=>$data_kelas]);
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
        if ($request->cekpw == 1) {
            $request->validate([
                'Nama' => ['required', 'string', 'max:255'],
                'Deskripsi' => ['required', 'string'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);
            Kelas::updateKelasGuru($request);
        }else{
            $request->validate([
                'Nama' => ['required', 'string', 'max:255'],
                'Deskripsi' => ['required', 'string'],
            ]);
            Kelas::updateKelasGuru($request);
        }
        return redirect(route('kelasguru'))->with('success', 'Kelas berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}
