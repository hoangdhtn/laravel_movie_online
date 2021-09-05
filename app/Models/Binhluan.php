<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Binhluan extends Model
{
    protected $fillable = [
        'id_binhluan',  'id_phim','id_user','noi_dung',
    ];
    protected $primaryKey = 'id_binhluan';
    protected $table = 'binhluan';
}
