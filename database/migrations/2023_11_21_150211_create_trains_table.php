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

    // questa funzione viene chiamata quando lancio php artisan migrate
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            // creata di default id
            $table->id();
            // inserisco i campi che voglio passare al db
            $table->string('company', 20);
            $table->string('slug',20)->unique(); // lo slug è unico
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->string('train_code', 10);
            $table->integer('carriage_number');
            $table->boolean('on_time')->default(true);
            $table->boolean('canceled')->default(false);
            // creata di default timestamp
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
        Schema::dropIfExists('trains');
    }
};
