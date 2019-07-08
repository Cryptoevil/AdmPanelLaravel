<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create1562620631568TransactionsTable extends Migration
{
    public function up()
    {
        if (!Schema::hasTable('transactions')) {
            Schema::create('transactions', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('project_id')->nullable();
                $table->foreign('project_id', 'project_fk_161976')->references('id')->on('projects');
                $table->unsignedInteger('transaction_type_id')->nullable();
                $table->foreign('transaction_type_id', 'transaction_type_fk_161977')->references('id')->on('transaction_types');
                $table->unsignedInteger('income_source_id')->nullable();
                $table->foreign('income_source_id', 'income_source_fk_161978')->references('id')->on('income_sources');
                $table->decimal('amount', 15, 2)->nullable();
                $table->unsignedInteger('currency_id')->nullable();
                $table->foreign('currency_id', 'currency_fk_161980')->references('id')->on('currencies');
                $table->date('transaction_date')->nullable();
                $table->string('name')->nullable();
                $table->longText('description')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
    }

    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
