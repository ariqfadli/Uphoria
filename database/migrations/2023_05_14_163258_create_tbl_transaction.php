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
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('ticket_id');
            $table->String("name", 25);
            $table->String("concert_name",25);
            $table->String("payment_method", 25);
            $table->integer("total_price");
            $table->date("transaction_date");
            $table->foreign('customer_id')->references('id')->on('tbl_customer')->onDelete('cascade');
            $table->foreign('ticket_id')->references('id')->on('tbl_ticket')->onDelete('cascade');
            $table->timestamps();        

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
