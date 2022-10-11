<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRdvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rdvs', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('identite')->nullable();
            $table->string('contact')->nullable();
            $table->string('emailrdv')->nullable();
            $table->string('daterdv')->nullable();
            $table->string('heurerdv')->nullable();
            $table->string('service')->nullable();
            $table->string('message')->nullable();
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
        Schema::dropIfExists('rdvs');
    }
}
