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
        Schema::create('information_systems', function (Blueprint $table) {
             
            $table->bigIncrements('id')->unsigned();
            $table->string('meta_field');
            $table->string('meta_value');
            $table->timestamps();

        });
        DB::update("ALTER TABLE information_systems AUTO_INCREMENT = 4;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('information_systems');
    }
};
