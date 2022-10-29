<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('confessions', function (Blueprint $table) {
            $table->id();
            $table->string('username')->index()->nullable();
            $table->foreign('username')->references('username')->on('users')->onUpdate('cascade');
            $table->foreignId('user_id')->nullable()->constrained();
            $table->string('confession');
            $table->integer('numberOfLikes')->nullable();
            $table->integer('numberOfDislikes')->nullable();
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
        Schema::dropIfExists('confessions');
    }
}
