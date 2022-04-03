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
        Schema::create('assurance_autos', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table
                ->foreignId('client_id')
                ->constrained()
                ->cascadeOnDelete();
            $table
                ->foreignId('politique_id')
                ->constrained()
                ->cascadeOnDelete();
         

            $table->string('usage');
            $table->string('marque');
            $table->string('catégorie');
            $table->string('version');
            $table->string('typemine');
            $table->string('immatriculation');
            $table->string('registration_date');
            
            $table->string('expiration_date');
            $table->string('prix');
            $table->tinyInteger('status')->default(1);
            $table->tinyInteger('delete_flag')->default(0);
            $table->dateTime('date_created')->default(DB::raw('CURRENT_TIMESTAMP'));

            $table->timestamp('date_updated')->default(DB::raw('CURRENT_TIMESTAMP'));
            

            $table->timestamps();
        });
        DB::update("ALTER TABLE assurance_autos AUTO_INCREMENT = 6;");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assurance_autos');
    }
};
