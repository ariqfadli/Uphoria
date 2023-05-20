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
        Schema::enableForeignKeyConstraints();

        Schema::create('tbl_event', function (Blueprint $table) {
            $table->id();
            $table->String("Rundown");
            $table->String("Concert_Name");
            $table->date("Concert_Date");
            $table->String("Concert_Location");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_event');
    }
};
