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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->string('religion');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('education');
            $table->string('group');
            $table->string('institute');
            $table->string('board');
            $table->float('result');
            $table->string('p_year');
            $table->string('t_tile');
            $table->string('country');
            $table->string('t_cover');
    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
