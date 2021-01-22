<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModuleAchatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('module_achats', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('module_formations_id');
            $table->unsignedBigInteger('users_id');
            $table->double('amount');
            $table->enum('payment_method',['Visa','MasterCard','AmericanExpress','Paypal']);
            $table->string('payment_status',60)->default('pending');
            $table->timestamps();
            
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('module_achats');
    }
}
