<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table='siswas';
    
    protected $fillable = ['nama','nis','gender','alamat','kontak','email','status_lapor_pkl','foto'];

    use HasFactory;

    public function pkls()
    {
        return $this->hasMany(Pkl::class, 'siswa_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}