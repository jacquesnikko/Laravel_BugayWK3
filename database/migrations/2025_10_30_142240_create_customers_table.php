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
            $table->id(); // primary key, auto_increment
            $table->string('first_name', 30); //snake case all small letters underscore seperator 
            $table->string('last_name', 30);
            $table->string('contact', 15);
            $table->text('address');
            $table->softDeletes();
            $table->timestamps(); //created_at updated_at
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
