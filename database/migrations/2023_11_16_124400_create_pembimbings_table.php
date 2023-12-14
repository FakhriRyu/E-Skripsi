<?php

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\Skripsi;
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
        Schema::create('pembimbings', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Mahasiswa::class)->constrained();
            $table->foreignId('dosen1_id')->constrained('dosens');
            $table->foreignId('dosen2_id')->constrained('dosens');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembimbings');
    }
};
