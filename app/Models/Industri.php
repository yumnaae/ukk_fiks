<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industri extends Model
{
    protected $table='industris';
    
    protected $fillable = ['nama','bidang_usaha','alamat','kontak','email','website'];

    use HasFactory;

    public function pkls()
    {
        return $this->hasMany(Pkl::class, 'industri_id');
    }
}