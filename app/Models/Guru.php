<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table='gurus';
    
    protected $fillable = ['nama','nip','gender','alamat','kontak','email'];

    use HasFactory;

    public function pkls()
    {
        return $this->hasMany(Pkl::class, 'guru_id');
    }
}