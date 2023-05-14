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
        Schema::create('table_pembeli', function (Blueprint $table) {
            $table->id("ID_User");
            $table->string('Nama', 50);
            $table->string('No_Telepon', 50);
            $table->string('Alamat', 100);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_pembeli');
    }
};
