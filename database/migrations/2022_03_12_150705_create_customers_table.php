<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('tin_number');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('mobile_number'); 
            $table->string('telephone_one');
            $table->string('telephone_two')->nullable();
            $table->string('fax');   
            $table->string('website');   
            $table->string('email');   
            $table->string('contact_person');
            $table->string('image')->nullable();
            $table->enum('is_active',['Yes','No'])->default('Yes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
