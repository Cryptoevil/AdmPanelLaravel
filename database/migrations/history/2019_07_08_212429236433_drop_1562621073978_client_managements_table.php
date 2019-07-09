<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1562621073978ClientManagementsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('client_managements');
    }
}
