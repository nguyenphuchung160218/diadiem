<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sto_name')->nullable();
            $table->string('sto_address')->nullable();
            $table->integer('sto_category_id')->index()->default(0);
            $table->string('sto_price')->nullable();
            $table->tinyInteger('sto_active')->default(1)->index();
            $table->tinyInteger('sto_hot')->default(0);
            $table->integer('sto_view')->default(0);
            $table->string('sto_avatar')->nullable();
            $table->string('sto_slug')->index();
            $table->string('sto_title')->nullable();
            $table->string('sto_decription')->nullable();
            $table->longText('sto_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stores');
    }
}
