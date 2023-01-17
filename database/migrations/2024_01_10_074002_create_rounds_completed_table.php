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
        Schema::create('rounds_completed', function (Blueprint $table) {
        
        $table->id();
        $table->unsignedBigInteger('user_id');
		$table->foreign('user_id')->references('id')->on('users');	
        $table->unsignedBigInteger('jobs_id');
		$table->foreign('jobs_id')->references('id')->on('jobs_21day');	
        $table->string('rounds');
        $table->string('score');
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
        Schema::dropIfExists('rounds_completed');
    }
};
