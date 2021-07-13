<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adatas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
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
        Schema::dropIfExists('adatas');
    }
}
