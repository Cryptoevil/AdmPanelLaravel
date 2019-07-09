<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Drop1562621073318ClientManagementSettingsTable extends Migration
{
    public function up()
    {
        Schema::dropIfExists('client_management_settings');
    }
}
