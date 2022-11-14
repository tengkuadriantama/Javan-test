@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Form Edit Keturunan</h1>
    <p class="mb-4">Silahkan Edit Data Keturunan </p>

    <div class="card shadow mb-4">

        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Data Keturunan</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('keturunan.update', $data->id) }}" method="post">
                 @method('put')
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="nama" value={{ $data->nama }}>
                        @error('nama')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_bapak" class="col-sm-2 col-form-label">Nama Bapak</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="nama_bapak" value="{{ $data->nama_bapak }}">
                        @error('nama_bapak')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama_anak" class="col-sm-2 col-form-label">Nama Anak</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="nama_anak" value="{{ $data->nama_anak }}">
                        @error('nama_anak')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="jenis_kelamin" class="form-control" required>
                            
                            <option value="{{ $data->jenis_kelamin }}" selected>Tidak Ingin Ubah ( {{ $data->jenis_kelamin }} )</option>
                            <option value="laki-laki" >Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="jenis_kelamin_anak" class="col-sm-2 col-form-label">Jenis Kelamin Anak</label>
                    <div class="col-sm-10">
                        <select name="jenis_kelamin_anak" class="form-control" required>
                            <option value="{{ $data->jenis_kelamin }}" selected>Tidak Ingin Ubah (
                                {{ $data->jenis_kelamin }} )</option>

                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
                        @error('jenis_kelamin_anak')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $data->id }}">
                <button type="submit" class="btn btn-primary">Update</button>
                <button type="cancel" class="btn btn-primary">Batal</button>
            </form>
        </div>
    </div>
</div>
@endsection
