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
        Schema::create('danhmuc', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('madanhmuc', 50);
            $table->string('tendanhmuc', 100);
            $table->text('mota');
            $table->text('hinhanh');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('danhmuc');
    }
};
