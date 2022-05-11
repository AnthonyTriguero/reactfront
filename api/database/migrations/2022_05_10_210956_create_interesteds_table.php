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
        Schema::create('interesteds', function (Blueprint $table) {
            $table->id();
            $table->integer('identificacion');
            $table->string('nombres_apellidos',200);
            $table->date('fecha_nac');
            $table->integer('num_cel');
            $table->integer('num_conv');
            $table->string('est_civil',15);
            $table->string('correo_p',10);
            $table->string('sexo',10);
            $table->string('ubicacion',70);
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
        Schema::dropIfExists('interesteds');
    }
};
