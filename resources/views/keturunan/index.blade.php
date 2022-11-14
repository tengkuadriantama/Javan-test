@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <h1>Data Kriteria</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/keturunan/create" class="btn btn-primary btn-icon-split btn-sm pb-0">
                <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                </span>
                <span class="text">Data Keturunan</span>
            </a>
        
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Nama Bapak</th>
                            <th scope="col">Nama Anak</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Jenis Kelamin Anak</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php($i = 1)
                        @forelse ($data as $item)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nama_bapak }}</td>
                            <td>{{ $item->nama_anak }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->jenis_kelamin_anak }}</td>
                            <td>
                                <ul class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <a href="/keturunan/{{$item->id}}/edit" class="btn btn-icon btn-primary"><i
                                                class="far fa-edit"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <form action="/keturunan/{{ $item->id }}" method="post"
                                            onsubmit="return confirm('yakin hapus data {{ $item->nama }}?')">
                                            @csrf
                                            @method("delete")
                                            <button class="btn btn-icon btn-danger" type="submit"><i
                                                    class="fas fa-times"></i></a></button>
                                        </form>

                                    </li>
                                </ul>

                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">--Data Kosong--</td>

                        </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
@endsection
@push('scripts')
@endpush
