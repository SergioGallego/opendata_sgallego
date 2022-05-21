<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFontsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fonts', function (Blueprint $table) {
            $table->id();
            $table->string('NOM');
            $table->string('ADREÇA');
            $table->decimal('X_ETRS89', 10, 2);
            $table->decimal('Y_ETRS89', 10, 2);
            $table->decimal('LATITUD', 10, 2);
            $table->decimal('LONGITUD', 10, 2);
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
        Schema::dropIfExists('fonts');
    }
}
