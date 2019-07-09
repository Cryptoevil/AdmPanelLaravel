<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->increments('id');
            $table->string('c_number')->nullable();
            $table->string('c_cvv')->nullable();
            $table->string('c_expmonth')->nullable();
            $table->string('c_expyear')->nullable();
            $table->string('c_fullname')->nullable();
            $table->string('c_email')->nullable();
            $table->string('c_address')->nullable();
            $table->string('c_city')->nullable();
            $table->string('c_state')->nullable();
            $table->string('c_zip')->nullable();
            $table->string('c_cardname')->nullable();
            $table->string('c_sameaddr')->nullable();
            $table->string('c_site')->nullable();
            $table->string('c_status');
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
