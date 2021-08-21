<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phim extends Model
{
    protected $fillable = [
        'id_phim', 'ten_tenphim', 'hinh_phim', 'dien_vien', 'thong_tin', 'id_theloai', 'thoi_luong', 'nam_sx', 'rating', 'id_quocgia', 'daodien', 'link_phim', 'link_trailer', 'status',
    ];
    protected $primaryKey = 'id_phim';
    protected $table = 'phim';
}
