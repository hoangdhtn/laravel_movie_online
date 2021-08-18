<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Theloai extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'id_theloai', 'ten_theloai', 'status',
    ];
    protected $primaryKey = 'id_theloai';
    protected $table = 'theloai';
}
