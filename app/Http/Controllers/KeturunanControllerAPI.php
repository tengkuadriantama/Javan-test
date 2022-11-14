<?php

namespace App\Http\Controllers;

use App\Models\Silsilah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KeturunanControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Silsilah::latest()->get();
        return response([
            'success' => true,
            'message' => 'List Semua Keturunan!',
            'data' => $data
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|max:50',

            ],
            [
                'nama.required' => 'Isikan Nama!',
                'nama.max' => 'Maksimal 50 Karakter!',
            ]
        );

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ], 401);
        } else {

            $data = Silsilah::create([
                'nama' => $request->nama,
                'nama_bapak' => $request->nama_bapak,
                'nama_anak' => $request->nama_anak,
                'jenis_kelamin' => $request->jenis_kelamin,
                'jenis_kelamin_anak' => $request->jenis_kelamin_anak,
            ]);

            if ($data) {
                return response()->json([
                    'success' => true,
                    'message' => 'Data Berhasil Disimpan!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Data Gagal Disimpan!',
                ], 401);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Silsilah::find($id);

        if ($data) {
            return response()->json([
                'success' => true,
                'message' => 'Detail Keturunan!',
                'data'    => $data
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Keturunan Tidak Ditemukan!',
                'data'    => ''
            ], 401);
        }
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

        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|max:50',

            ],
            [
                'nama.required' => 'Isikan Nama!',
                'nama.max' => 'Maksimal 50 Karakter!',
            ]
        );

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Silahkan Isi Bidang Yang Kosong',
                'data'    => $validator->errors()
            ], 401);
        } else {
            $data = Silsilah::find($id);
            $data->nama = $request->nama;
            $data->nama_bapak = $request->nama_bapak;
            $data->nama_anak = $request->nama_anak;
            $data->jenis_kelamin = $request->jenis_kelamin;
            $data->jenis_kelamin_anak = $request->jenis_kelamin_anak;
            $data->update();
            

            if ($data) {
                return response()->json([
                    'success' => true,
                    'message' => 'Data Berhasil Diupdate!',
                ], 200);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Data Gagal Diupdate!',
                ], 401);
            }
        }
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Silsilah::findOrFail($id);
        $data->delete();

        if ($data) {
            return response()->json([
                'success' => true,
                'message' => 'Data Berhasil Dihapus!',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Data Gagal Dihapus!',
            ], 400);
        }
    }
}
