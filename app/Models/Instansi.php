<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    use HasFactory;
    protected $guarded= [
        'instansi_id',
        'created_at',
        'updated_at'
    ];
}
