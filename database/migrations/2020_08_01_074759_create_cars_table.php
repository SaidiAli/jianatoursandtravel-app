<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('condition')->nullable();
            $table->string('fuel')->nullable();
            $table->string('color')->nullable();
            $table->string('year')->nullable();
            $table->string('drive_type')->nullable();
            $table->string('door_count')->nullable();
            $table->string('price');
            $table->string('location');
            $table->string('type')->nullable();
            $table->string('brand')->nullable();
            $table->boolean('hire')->nullable();
            $table->boolean('sale')->nullable();
            $table->boolean('available')->default(true);
            $table->string('images_directory')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
