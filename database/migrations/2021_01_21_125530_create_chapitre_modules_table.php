<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapitreModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapitre_modules', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('chapitre',254);
            $table->unsignedInteger('module_formations_id');

            $table->foreign('module_formations_id')->references('id')->on('module_formations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chapitre_modules');
    }
}
