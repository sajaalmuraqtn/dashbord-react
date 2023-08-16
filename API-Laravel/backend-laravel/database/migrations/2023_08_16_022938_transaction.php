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
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->Integer('customerId');
            $table->string('BankName')->nullable();
            $table->string('renewal')->nullable();
            $table->date('dueDate')->nullable();
            $table->Integer('payCheck')->nullable();
            $table->Integer('accountNumber')->nullable();
            $table->Integer('CheckNumber')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');//
    }
};
