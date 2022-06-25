<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Models\models\Anggota;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anggota = Anggota::orderBy('id', 'DESC')
            ->paginate(5);
        return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('anggota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|max:5',
            'nama' => 'required ',
            'jenis_kel' => 'required ',
            'telepon' => 'required',
            'email' => 'required|email',
            'foto' => 'required',
        ]);
        $foto = $request->file('foto');
        //membaca extensi file gambar
        $ext = $request->file('foto')->getClientOriginalExtension();
        //memberi file menggunakan no anggota
        $namaFile = request()->get('id') . '.' . $ext;
        //menyimpan ke folder public/foto/...
        $request->file('foto')->move('foto', $namaFile);
        $anggota = new Anggota($request->all());
        $anggota->foto = $namaFile;
        $anggota->save();
        return redirect()->route('anggota.index')
            ->with(
                'success',
                'Menambah Anggota telah berhasil disimpan'
            );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = Anggota::findOrFail($id);
        return view('anggota.show',compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
