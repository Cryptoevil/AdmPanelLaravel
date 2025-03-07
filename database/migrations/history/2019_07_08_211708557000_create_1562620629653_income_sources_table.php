<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562620629653IncomeSourcesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('income_sources')) {
            Schema::create('income_sources', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name')->nullable();
                $table->float('fee_percent', 15, 2)->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('income_sources');
    }
}
