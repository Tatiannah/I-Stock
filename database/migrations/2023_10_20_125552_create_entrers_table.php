<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntrersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrers', function (Blueprint $table) {
            $table->id();
            $table->string('CodeF',6);
            $table->string('Im', 6);
            $table->string('num_entree');
            $table->date('date_entree');
            $table->integer('qte_entree');
            $table->timestamps();

            $table->foreign('CodeF')->references('CodeF')->on('fournitures');
            $table->foreign('Im')->references('Im')->on('agents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrers');
    }
}
