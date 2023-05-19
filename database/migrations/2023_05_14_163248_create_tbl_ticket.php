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
        
        Schema::create('tbl_ticket', function (Blueprint $table) {
            $table->id();
            $table->String("Ticket_name", 50);
            $table->String("CAT",20);
            $table->String("Seat", 20);
            $table->String("Ticket_amount", 25);
            $table->String("Section", 30);
            $table->integer("Ticket_price");
            $table->String("Row", 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ticket');
    }
};
