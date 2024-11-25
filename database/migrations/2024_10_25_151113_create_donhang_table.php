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
        Schema::create('donhang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nguoidung_id')->unsigned();
            $table->bigInteger('diachi_id')->unsigned();
            $table->dateTime('ngay');
            $table->decimal('tongtien', 19, 0)->default(0);
            $table->string('trangthai');
            $table->timestamps();

            $table->foreign('nguoidung_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donhang');
    }
};
