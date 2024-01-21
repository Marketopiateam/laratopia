<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotionsTable extends Migration
{
    public function up()
    {
        Schema::create('motions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->longText('details')->nullable();
            $table->string('minuts')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
