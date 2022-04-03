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
        Schema::create('categories', function (Blueprint $table) {
              
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
            $table->string('description');
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('delete_flag')->default(0);
            $table->dateTime('date_created');

            $table->timestamp('date_updated')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
               
               
        });
        
        DB::update("ALTER TABLE categories AUTO_INCREMENT = 5;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
