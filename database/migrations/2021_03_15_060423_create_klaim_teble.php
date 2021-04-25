<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKlaimTeble extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('klaim_table', function (Blueprint $table) {
            $table->Increments('id_klaim');
            $table->decimal('jp33_sdbln', 20,2);
            $table->decimal('jp34_sdbln', 20,2);
            $table->decimal('jp33_bln', 20,2);
            $table->decimal('jp34_bln', 20,2);
            $table->decimal('jp_sdbln', 20,2);
            $table->decimal('jp_bln', 20,2);
            $table->decimal('rasio33', 20,2);
            $table->decimal('rasio34', 20,2);
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
        Schema::dropIfExists('klaim_teble');
    }
}
