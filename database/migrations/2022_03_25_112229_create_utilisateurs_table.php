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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
           
            $table->string('Nom');
            $table->string('Nom_2');
            $table->string('Prenom');
            $table->string('mot_de_passe');

            $table->string('avatar');
            $table->string('dernier_connection');
            $table->string('type');
            $table->integer('status');
            $table->dateTime('date_created');

            $table->timestamp('date_updated')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamps();
           
        });
        DB::update("ALTER TABLE utilisateurs AUTO_INCREMENT = 9;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
};
