@extends('layouts.app')
@section('content')
    <h3>Masukan Data Anggota Baru</h3>
    {!! Form::open(['route' => ['anggota.update', $anggota->id], 'method' => 'PATCH', 'enctype' => 'multipart/form-data', 'files' => true]) !!}
    <div class="form-group">
        {!! Form::label('user_id', 'Nomor Anggota:', ['class' => 'control-label']) !!}
        {!! Form::text('user_id', $anggota->user_id, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nama', 'Nama:', ['class' => 'control-label']) !!}
        {!! Form::text('nama', $anggota->nama, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('jenis_kel', 'Jenis Kelamin:', ['class' => 'control-label']) !!}
        {!! Form::radio('jenis_kel', 'L', $anggota->jenis_kel == 'L' ? true : false) !!} Laki-laki
        {!! Form::radio('jenis_kel', 'P', $anggota->jenis_kel == 'P' ? true : false) !!} Perempuan
    </div>
    <div class="form-group">
        {!! Form::label('alamat', 'Alamat:', ['class' => 'control-label']) !!}
        {!! Form::text('alamat', $anggota->alamat, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tanggal_lhr', 'Tanggal Lahir', ['class' => 'control-label']) !!}
        {!! Form::date('tanggal_lhr', $anggota->tanggal_lhr, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telepon', 'Telepon/HP:', ['class' => 'control-label']) !!}
        {!! Form::text('telepon', $anggota->telepon, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'E-mail:', ['class' => 'control-label']) !!}
        {!! Form::text('email', $anggota->email, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('foto', 'Foto:', ['class' => 'control-label']) !!}
        {!! Form::file('foto', Request::old('foto'), ['class' => 'form-control']) !!}
        @if ($errors->has('foto'))
            <span class="help-block">{{ $errors->first('foto') }}</span>
        @endif
        <img src="{{ URL::to('/foto/' . $anggota->foto) }}" class="img-rounded img-responsive" style="width: 200px">
    </div>
    {!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
