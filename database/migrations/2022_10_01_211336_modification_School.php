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
        Schema::table('school', function (Blueprint $table) {
          //  $table->bigInteger('populations');
        //   $table->string('lastname');
         //  $table->string('nom');
         //  $table->string('email');
          // $table->string('naissance');
          // $table->string('gender');
          // $table->string('lieu');
          // $table->string('Niveau_Scolaire');
          // $table->string('maladies');
         //  $table->string('formation_a');
         //  $table->string('formation_b');
         //  $table->string('formation_c');
         //  $table->string('urgence');
          // $table->string('paiement');


        });
        Schema::table('School', function (Blueprint $table) {
            $table->renameColumn('Username', 'nom');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
