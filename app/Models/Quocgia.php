<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quocgia extends Model
{
    protected $fillable = [
        'id_quocgia', 'ten_quocgia', 'status',
    ];
    protected $primaryKey = 'id_quocgia';
    protected $table = 'quocgia';
}
