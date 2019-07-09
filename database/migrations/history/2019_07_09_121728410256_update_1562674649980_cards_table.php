<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1562674649980CardsTable extends Migration
{
    public function up()
    {
        Schema::table('cards', function (Blueprint $table) {
            $table->string('c_number')->nullable()->change();
            $table->string('c_cvv')->nullable()->change();
            $table->string('c_expmonth')->nullable()->change();
            $table->string('c_expyear')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('cards', function (Blueprint $table) {
        });
    }
}
