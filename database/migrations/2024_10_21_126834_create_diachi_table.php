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
        Schema::create('diachi', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nguoidung_id');
            $table->text('diachi');
            $table->tinyInteger('macdinh')->default(1);
            $table->timestamps();

            $table->foreign('nguoidung_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diachi');
    }
};
