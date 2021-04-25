<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIwTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iw', function (Blueprint $table) {
            $table->increments('iw_id');
            $table->decimal('bulan_Ini',20,2);
            $table->decimal('sdBulan_Ini',20,2);
            $table->decimal('anggaran',20,2);
            $table->decimal('persentasi',5, 2);
            $table->decimal('realisasi',5, 2);

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
        Schema::dropIfExists('iw');
    }
}
