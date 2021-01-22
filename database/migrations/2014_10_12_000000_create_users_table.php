<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prenom');
            $table->string('nom');
            $table->string('deuxieme_nom')->nullable();
            $table->string('sexe',10);
            $table->date('dob')->nullable();
            $table->string('phone',15);
            $table->unsignedInteger('villes_id')->nullable();
            $table->string('adresse',200);
            $table->string('email')->unique();
            $table->string('phone_otp',10);
            $table->timestamp('phone_verified_at');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->unsignedInteger('roles_id');
            $table->text('photo');
            $table->rememberToken();
            $table->timestamps();


            $table->foreign('villes_id')->references('id')->on('villes')->onDelete('cascade');
            $table->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
