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

        Schema::create('tbl_transaction', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ID_customer');
            $table->unsignedBigInteger('ID_ticket');
            $table->String('Username');
            $table->String("Payment_Method", 25);
            $table->integer("Total_Price");
            $table->dateTime("Transaction_date", 0);
            $table->foreign('ID_customer')->references('id')->on('tbl_customer')->onDelete('cascade');
            $table->foreign('ID_ticket')->references('id')->on('tbl_ticket')->onDelete('cascade');

            
            
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_transaction');
    }
};
