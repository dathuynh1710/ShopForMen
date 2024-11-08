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
        Schema::create('mathang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('tenmathang', 500);
            $table->mediumText('mota');
            $table->decimal('giagoc')->default(0);
            $table->decimal('giaban')->default(0);
            $table->integer('soluongton')->default(0);
            $table->text('hinhanh');
            $table->boolean('is_featured');
            $table->bigInteger('danhmuc_id')->unsigned();
            $table->bigInteger('thuonghieu_id')->unsigned();
            $table->timestamps();

            // References
            $table->foreign('danhmuc_id')->references('id')->on('danhmuc');
            $table->foreign('thuonghieu_id')->references('id')->on('thuonghieu');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mathang');
    }
};
