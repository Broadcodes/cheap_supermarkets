<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupermarketsTable extends Migration
{
    public function up()
    {
        Schema::create('supermarkets', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150)->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('civic')->nullable()->default('SNC');
            $table->string('city', 100);
            $table->integer('postal_code');
            $table->unique(['name', 'address', 'civic', 'city']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('supermarkets');
    }
}
