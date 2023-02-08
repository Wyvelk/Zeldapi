<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monsters', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->string("species");
            $table->string("type")->nullable();
            $table->string("color")->nullable();
            $table->text("description");
            $table->string("img_url");
            $table->text("loots")->nullable();
            $table->string("biome");
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
        Schema::dropIfExists('monsters');
    }
};
