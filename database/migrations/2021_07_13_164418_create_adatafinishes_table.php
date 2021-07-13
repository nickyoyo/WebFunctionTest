<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdatafinishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adatafinishes', function (Blueprint $table) {
            $table->string('id');
            $table->string('created_at');
            $table->string('updated_at');
            $table->string('PersonalID');
            $table->string('users_Dep');
            $table->string('request');
            $table->string('status');
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adatafinish');
    }
}
