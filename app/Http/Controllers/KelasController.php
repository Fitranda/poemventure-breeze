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

        return redirect(route('kelasguru'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelas $kelas)
    {
        //
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
    public function update(Request $request, Kelas $kelas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelas $kelas)
    {
        //
    }
}
