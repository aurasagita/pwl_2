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
        Schema::create('hobi', function (Blueprint $table) {
            $table->string('nama', 20)->nullable();
            $table->string('hobi_1', 20)->nullable();
            $table->string('hobi_2', 10)->nullable();
            $table->string('hobi_3', 20)->nullable();
            $table->string('hobi_4', 10)->nullable();
            $table->string('hobi_5', 10)->nullable();
            $table->bigInteger('nomer', 20)->primary();
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
        Schema::dropIfExists('hobi');
    }
};
