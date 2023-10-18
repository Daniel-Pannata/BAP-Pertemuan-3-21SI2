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
        Schema::create('transkrip_akademiks', function (Blueprint $table) {
            $table->id();
            $table->char('Student_id', 11);
            $table->decimal('Kode_matakuliah', 10, 2);
            $table->char('Kode_term');
            $table->char('nilai', 2);
            $table->integer('sks');
            $table->decimal('gpa', 5, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transkrip_akademiks');
    }
};
