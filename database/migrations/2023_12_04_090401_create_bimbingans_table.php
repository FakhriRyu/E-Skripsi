<?php

use App\Models\Pembimbing;
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
        Schema::create('bimbingans', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pembimbing::class)->constrained;
            $table->foreignId('mahasiswa_id')->constrained('mahasiswas');
            $table->string('bagian');
            $table->string('file_skripsi');
            $table->dateTime('waktu1');
            $table->foreignId('dosen_id')->constrained('dosens');
            $table->string('file_revisi')->nullable();
            $table->enum('status', ['Menunggu Konfirmasi','ACC','Revisi'])->default('Menunggu Konfirmasi');
            $table->string('keterangan')->nullable();
            $table->dateTime('waktu2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bimbingans');
    }
};
