<?php

namespace App\Models\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $primaryKey = 'id';
    protected $fillable = ['id','nama','tanggal_lhr','jenis_kel','alamat','telepon','email','foto','user_id'];
}
