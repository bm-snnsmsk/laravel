<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // php artisan make:migration create_product_table kodundan sonra oluştu
        Schema::create('product', function (Blueprint $table) {
            $table->id();   // hazır geldi
            $table->timestamps(); // hazır geldi // oluşturma ve güncelleme tarihi

            $table->string('name');    // kendi eklemem  // name adında kolon
            $table->string('surname'); // kendi eklemem  // surname adında kolon
            $table->integer('age');    // kendi eklemem  // age adında kolon
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
};
