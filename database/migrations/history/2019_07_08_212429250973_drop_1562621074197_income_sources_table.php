<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1562621074197IncomeSourcesTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('income_sources');
    }
}
