<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeuanganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keuangan', function (Blueprint $table) {
            $table->Increments('id_keuangan');
            $table->decimal('total_biaya_sdbln', 20,2);
            $table->decimal('total_biaya_bln', 20,2);
            $table->decimal('total_laba_sdbln', 20,2);
            $table->decimal('total_laba_bln', 20,2);
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
        Schema::dropIfExists('keuangan');
    }
}
