<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Jadwal_Kuliah extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'jadwal_kuliah'; 

    protected $fillable = [
        'id',
        'ruang_kuliah_kode_ruang',
        'mata_kuliah_kode_mk',
        'hari',
        'jam_mulai',
        'jam_selesai',
    ];

     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
   
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
}