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
        Schema::create('clients', function (Blueprint $table) {
            
            $table->bigIncrements('id')->unsigned(); 
            $table->string('Nature');
            $table->string('CIN_RC_IF');
            $table->string('civilite');
            $table->string('Nom');
            $table->string('Prenom');
            $table->dateTime('date_naissance');
            $table->string('genre');

            $table->string('Situation_familiale');
            
            $table->string('adress');
            $table->string('Ville');
            $table->integer('code_postale');
            $table->integer('telephone_fixe_mobile');
            
            $table->integer('telephone_mobile');
            $table->string('email');
            
            $table->string('categoriepermi');
            
            $table->string('lien_avec_le_souscripteur');
            $table->string('CSP');

            $table->dateTime('datepermis');
            $table->string('numeropermi');
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('delete_flag')->default(0);
       /*     $table->string('image');*/

            $table->dateTime('date_created')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->timestamp('date_updated')->default(DB::raw('CURRENT_TIMESTAMP'));
            
           
            $table->timestamps();
        });
        
        DB::update("ALTER TABLE clients AUTO_INCREMENT = 10000;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
