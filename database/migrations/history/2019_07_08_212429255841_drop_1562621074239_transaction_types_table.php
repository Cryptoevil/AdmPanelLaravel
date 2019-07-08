<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1562621074239TransactionTypesTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('transaction_types');
    }
}
