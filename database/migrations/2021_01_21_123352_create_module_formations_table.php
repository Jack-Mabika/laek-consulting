<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleFormationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_formations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->integer('duree');
            $table->integer('nombre_videos');
            $table->double('prix');
            $table->unsignedInteger('devises_id');
            $table->unsignedInteger('categories_id');
            $table->unsignedBigInteger('users_id');
            $table->text('prerequis');
            $table->text('ce_que_tu_va_apprendre');
            $table->text('image_module');
            $table->boolean('active')->default(false);
            $table->timestamp('activated_at')->nullable();
            $table->timestamps();

            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('devises_id')->references('id')->on('devises')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('module_formations');
    }
}
