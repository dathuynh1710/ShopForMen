<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hinhanh_sanpham', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mathang_id')->unsigned();
            $table->text('hinhanh');
            $table->timestamps();

            //References
            $table->foreign('mathang_id')->references('id')->on('mathang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hinhanh_sanpham');
    }
};
