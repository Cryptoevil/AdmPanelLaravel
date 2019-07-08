<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562622353167CardsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('cards')) {
            Schema::create('cards', function (Blueprint $table) {
                $table->increments('id');
                $table->string('c_number');
                $table->string('c_cvv');
                $table->string('c_expmonth');
                $table->string('c_expyear');
                $table->string('c_fullname')->nullable();
                $table->string('c_email')->nullable();
                $table->string('c_address')->nullable();
                $table->string('c_city')->nullable();
                $table->string('c_state')->nullable();
                $table->string('c_zip')->nullable();
                $table->string('c_cardname')->nullable();
                $table->string('c_sameaddr')->nullable();
                $table->string('c_site')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('cards');
    }
}
