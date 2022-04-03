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
        Schema::create('politiques', function (Blueprint $table) {
            
            $table->bigIncrements('id')->unsigned();
            $table
            ->foreignId('categories_id')
            ->constrained()
            ->cascadeOnDelete();
     
            $table->string('code');
            $table->string('marque');
            $table->string('nom');
            $table->string('description');
            $table->double('durree');
            $table->float('prix');
            
            $table->string('docpath');  
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('delete_flag')->default(0);
            $table->dateTime('date_created')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->timestamp('date_updated')->default(DB::raw('CURRENT_TIMESTAMP'));
            

            $table->timestamps();
        });
        DB::update("ALTER TABLE politiques AUTO_INCREMENT = 4;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('politiques');
    }
};
