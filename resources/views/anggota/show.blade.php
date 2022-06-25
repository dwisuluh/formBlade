@extends('layouts.app')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">
                                <h3>Lihat Detail Pegawai {{ $anggota->user_id }}</h3>
                            </span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('anggota.edit',$anggota->id) }}">
                                Kembali</a>
                            <a class="btn btn-primary" href="{{ route('anggota.index') }}">
                                Kembali</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <table class="table table-sm">
                            <tr>
                                <td style="width: 200px;">
                                    <strong>Nomor </strong>
                                </td>
                                <td>: {{ $anggota->user_id }}</td>
                            </tr>
                            <tr>
                                <td><strong>Nama</strong></td>
                                <td>: {{ $anggota->nama }}</td>
                            </tr>
                            <tr>
                                <td><strong>Alamat</strong></td>
                                <td>: {{ $anggota->alamat }}</td>
                            </tr>
                            <tr>
                                <td><strong>Email </strong></td>
                                <td>: {{ $anggota->email }}</td>
                            </tr>
                            <tr>
                                <td><strong>Telepon/HP </strong></td>
                                <td>: {{ $anggota->telepon }}</td>
                            </tr>
                            <tr>
                                <td><strong>Tanggal Lahir </strong></td>
                                <td>: {{ $anggota->tanggal_lhr }}</td>
                            </tr>
                            <tr>
                                <td><strong>Jenis Kelamin </strong></td>
                                <td>:
                                    {{ $anggota->jenis_kel == 'L' ? 'Laki-laki' : 'Perempuan' }}
                                </td>
                            </tr>

                            <tr>
                                <td><strong>Foto</strong></td>
                                <td>: <img
                                        src="{{ URL::to('/foto/' . $anggota->foto) }}">
                                </td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
