<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\KelasDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

class KelasSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = DB::table('kelas')
        //         ->leftJoin('kelasdetail', 'kelas.id', '=', 'kelasdetail.KelasID')
        //         ->where('kelasdetail.SiswaID',Auth::user()->id )
        //         ->get();
                // var_dump($data);die;
        $data = Kelas::getdataKelas();
        return view('Siswa.kelas', ['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Siswa.FormKelas', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kelas = DB::table('kelas')
                ->where('kode_kelas', $request->kode_kelas)
                ->first();

        if ($kelas && Hash::check($request->password, $kelas->password)) {
            Kelasdetail::create([
                'KelasID' => $kelas->id,
                'SiswaID' => Auth::user()->id,
            ]);

            return redirect(route('kelassiswa'));
        } else {
            return redirect()->back()
            ->withErrors(['password' => 'Password Salah'])
            ->withInput($request->except('password'));
        }


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
