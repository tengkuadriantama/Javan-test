<?php

namespace App\Http\Controllers;

use App\Models\Silsilah;
use Illuminate\Http\Request;

class KeturunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Silsilah::all();
        return view('keturunan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keturunan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nama' => 'required|max:50',

            ],
            [
                'nama.required' => 'Isikan Nama!',
                'nama.max' => 'Maksimal 50 Karakter!',
            ]
        );
        Silsilah::create([
            'nama' => $request->nama,
            'nama_bapak' => $request->nama_bapak,
            'nama_anak' => $request->nama_anak,
            'jenis_kelamin' => $request->jenis_kelamin,
            'jenis_kelamin_anak' => $request->jenis_kelamin_anak,

        ]);

        return redirect()->route('keturunan.index')->with('message', 'Data Berhasil Ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $data = Silsilah::find($id);
        return view('keturunan.edit', compact('data'));
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
        $validated = $request->validate(
            [
                'nama' => 'required|max:50',

            ],
            [
                'nama.required' => 'Isikan Nama!',
                'nama.max' => 'Maksimal 50 Karakter!',
            ]
        );

        $data = Silsilah::find($request->id);
        $data->nama = $request->nama;
        $data->nama_bapak = $request->nama_bapak;
        $data->nama_anak = $request->nama_anak;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->jenis_kelamin_anak = $request->jenis_kelamin_anak;
        $data->update();
        return redirect()->route('keturunan.index')->with('message', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donatur = Silsilah::find($id);
        $donatur->delete();
        return redirect()->route('keturunan.index')->with('message', 'Data Berhasil Dihapus!');
    }
}
