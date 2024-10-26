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
        Schema::create('chitiet_donhang', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('donhang_id')->unsigned();
            $table->bigInteger('mathang_id')->unsigned();
            $table->decimal('dongia', 16, 0)->default(0);
            $table->integer('soluong')->default(1);
            $table->decimal('thanhtien', 19, 0)->default(0);
            $table->timestamps();

            $table->foreign('donhang_id')->references('id')->on('donhang');
            $table->foreign('mathang_id')->references('id')->on('mathang');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chitiet_donhang');
    }
};
