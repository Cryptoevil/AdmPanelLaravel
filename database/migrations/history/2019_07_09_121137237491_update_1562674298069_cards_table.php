<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1562674298069CardsTable extends Migration
{
    public function up()
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->string('c_status');
        });
    }

    public function down()
    {
        Schema::table('cards', function (Blueprint $table) {
        });
    }
}
