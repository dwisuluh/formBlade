<!-- app/views/pegawai/create.blade.php -->
@extends('layouts.app')
@section('content')
    <h3>Masukan Data Anggota Baru</h3>
    {!! Form::open(['route' => 'anggota.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {!! Form::label('user_id', 'Nomor Anggota:', ['class' => 'control-label']) !!}
        {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('nama', 'Nama:', ['class' => 'control-label']) !!}
        {!! Form::text('nama', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('jenis_kel', 'Jenis Kelamin:', ['class' => 'control-label']) !!}
        {!! Form::radio('jenis_kel', 'L', false) !!} Laki-laki
        {!! Form::radio('jenis_kel', 'P', false) !!} Perempuan
    </div>
    <div class="form-group">
        {!! Form::label('alamat', 'Alamat:', ['class' => 'control-label']) !!}
        {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('tanggal_lhr', 'Tanggal Lahir', ['class' => 'control-label']) !!}
        {!! Form::date('tanggal_lhr', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telepon', 'Telepon/HP:', ['class' => 'control-label']) !!}
        {!! Form::text('telepon', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'E-mail:', ['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('foto', 'Foto:', ['class' => 'control-label']) !!}
        {!! Form::file('foto', Request::old('foto'), ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
