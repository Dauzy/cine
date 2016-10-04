<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropTableClase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        Schema::table('movies', function (Blueprint $table){
            $table->dropForeign(['movies_clase_id_foreign']);
            $table->dropColumn('clase_id');
        });

        Schema::dropIfExists('clases');
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
}
