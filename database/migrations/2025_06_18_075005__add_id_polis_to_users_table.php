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
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id_poli')->nullable(); // Kolom foreign key poli
            $table->foreign('id_poli')->references('id')->on('polis')->onDelete('set null'); // Relasi ke tabel poli
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
        $table->dropForeign(['id_poli']); // Hapus foreign key
        $table->dropColumn('id_poli'); // Hapus kolom id_poli
        });
    }
};
