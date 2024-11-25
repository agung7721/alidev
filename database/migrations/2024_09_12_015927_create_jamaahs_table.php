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
        Schema::create('jamaahs', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->string('no_porsi');
            $table->string('nama');
            $table->string('ktp');
            $table->string('no_passport');
            $table->string('telpon');
            $table->string('hotel');
            $table->string('travel_muthowif');
            $table->date('tanggal_kepulangan');
            $table->text('alamat_ktp');
            $table->text('alamat_tujuan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jamaahs');
    }
};
