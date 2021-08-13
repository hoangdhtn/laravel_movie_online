<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Phim extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phim', function (Blueprint $table) {
            $table->bigIncrements('id_phim');
            $table->string('ten_phim',100);
            $table->string('hinh_phim');
            $table->string('dien_vien');
            $table->string('thong_tin');
            $table->string('id_theloai');
            $table->time('thoi_luong');
            $table->string('nam_sx');
            $table->float('rating');
            $table->string('id_quocgia');
            $table->string('id_daodien');
            $table->string('link_phim');
            $table->string('link_trailer');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phim');
    }
}
