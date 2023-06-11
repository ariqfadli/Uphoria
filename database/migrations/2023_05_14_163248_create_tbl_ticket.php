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
            $table->unsignedBigInteger("event_id");
            $table->String("concert_name");
            $table->date("concert_date");
            $table->String("rundown");
            $table->String("concert_location");
            $table->integer("price");
            $table->String("cat",20);
            $table->String("seat", 20);
            // $table->json('images')->nullable();
            // $table->String("section", 30);
            // $table->String("row", 10);
            $table->foreign('event_id')->references('id')->on('tbl_event')->onDelete('cascade');
            $table->timestamps();  
            
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
