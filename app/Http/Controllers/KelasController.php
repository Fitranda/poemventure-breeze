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
    public function index()
    {
        $data = DB::table('kelas')->where('GuruID',Auth::user()->id )->get();
        return view('Guru.kelas', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Guru.FormKelas', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

        Kelas::create([
            'kode_kelas' => $code,
            'Nama' => $request->Nama,
            'Deskripsi' => $request->Deskripsi,
            'GuruID' => Auth::user()->id,
            'password' => Hash::make($request->password),
        ]);

        return redirect(route('kelasguru'))->with('success', 'Kelas berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data_kelas = DB::table('kelas')->where('id',$id )->first();
        $data_detail = DB::table('kelasdetail')->where('KelasID',$id)->get();
        $data_soal = DB::table('soal')->where('KelasID',$id)->get();
        return view('Guru.DetailKelas', ['kelas'=>$data_kelas,'detail'=>$data_detail,'soal'=>$data_soal]);
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
            $post = Kelas::findOrFail($request->id);

            // Melakukan pembaruan data
            $post->Nama = $request->Nama;
            $post->Deskripsi = $request->Deskripsi;
            $post->password = Hash::make($request->password);
            $post->save();
        }else{
            $request->validate([
                'Nama' => ['required', 'string', 'max:255'],
                'Deskripsi' => ['required', 'string'],
            ]);
            $post = Kelas::findOrFail($request->id);

            // Melakukan pembaruan data
            $post->Nama = $request->Nama;
            $post->Deskripsi = $request->Deskripsi;
            $post->save();
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
