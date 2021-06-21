<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStavkanarudzbinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stavkanarudzbines', function (Blueprint $table) {
            $table->foreignId('narudzbina_id')->constrained('narudzbinas');
            $table->foreignId('ploca_id')->constrained('plocas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stavkanarudzbines');
    }
}
