<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;
    protected $primaryKey = 'acara_id';

    protected $guarded= [
        'acara_id',
        'created_at',
        'updated_at'
    ];
    // protected $fillable = [
    //     // 'acara_id',
    //     'nama_acara',
    //     'tanggal_acara', 
    //     'instansi_id',
    //     'template_sertifikat'
        
    // ];
    
    }