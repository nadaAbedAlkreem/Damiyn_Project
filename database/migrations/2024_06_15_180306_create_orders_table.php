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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('code') ; 
            $table->string('mobile_phone_vendor');
            $table->enum('status_order', ['fail', 'Wait', 'complete'])->default('Wait');
            $table->enum('type_request', ['p','s'])->default('p');
            $table->longText('description');
            // $table->foreign('user_id')->references('id')->on('users');
            $table->String('slug')->unique() ; 
            $table->timestamps();
            $table->timestamp('daleted_at')->nullable() ;

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
