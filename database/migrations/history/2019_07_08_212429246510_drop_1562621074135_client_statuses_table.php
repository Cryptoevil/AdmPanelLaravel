<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1562621074135ClientStatusesTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('client_statuses');
    }
}
