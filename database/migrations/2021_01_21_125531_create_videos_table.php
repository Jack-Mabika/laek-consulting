<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->integer('duree');
            $table->text('description');
            $table->string('video_url',254);
            $table->unsignedBigInteger('chapitre_modules_id');
            $table->string('divers')->nullable();
            $table->boolean('lisible')->default(false);
            $table->text('thumbnail');
            $table->foreign('chapitre_modules_id')->references('id')->on('chapitre_modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videos');
    }
}
