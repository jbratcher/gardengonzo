<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->enum('type', ['annual', 'bulb', 'cactus', 'climber', 'conifer', 'fern', 'fruit', 'herb', 'ornamental', 'perennial', 'rose', 'shrub', 'tree', 'vegetable']);
            $table->date('plantInsideDate')->nullable();
            $table->date('plantOutsideDate')->nullable();
            $table->unsignedInteger('timeToFertilize')->nullable();
            $table->unsignedInteger('timeToFlower')->nullable();
            $table->unsignedInteger('timeToHarvest')->nullable();
            $table->string('plantingSeason')->nullable();
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
        Schema::dropIfExists('plants');
    }
}
