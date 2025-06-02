<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pkl extends Model
{
    protected $table='pkls';
    
    protected $fillable = ['siswa_id','industri_id','guru_id','mulai','selesai'];

    use HasFactory;

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }

    public function industri()
    {
        return $this->belongsTo(Industri::class, 'industri_id');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id');
    }
}