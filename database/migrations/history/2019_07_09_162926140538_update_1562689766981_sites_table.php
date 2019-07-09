<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Update1562689766981SitesTable extends Migration
{
    public function up()
    {
        Schema::table('sites', function (Blueprint $table) {
            $table->dropColumn('c_status');
        });
        Schema::table('sites', function (Blueprint $table) {
            $table->string('s_status')->nullable();
        });
    }

    public function down()
    {
        Schema::table('sites', function (Blueprint $table) {
        });
    }
}
