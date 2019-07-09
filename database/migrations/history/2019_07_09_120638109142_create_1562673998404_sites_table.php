<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562673998404SitesTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('sites')) {
            Schema::create('sites', function (Blueprint $table) {
                $table->increments('id');
                $table->string('s_url');
                $table->string('c_status');
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('sites');
    }
}
