<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInscriresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscrires', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cin');
            $table->string('cin_img');
            $table->string('phone');
            $table->string("fomation_id");
            $table->bigInteger('type_learn')->unsigned();
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
        Schema::dropIfExists('inscrires');
    }
}
