<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562620629361TransactionTypesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('transaction_types')) {
            Schema::create('transaction_types', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('transaction_types');
    }
}
