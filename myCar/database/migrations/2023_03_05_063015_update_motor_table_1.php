<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Motor;

class UpdateMotorTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Motor', function (Blueprint $table) {
            $table->increments('motorId')->autoIncrement()->change();
            $table->kendaraanId();
            $table->mesin();
            $table->tipeSuspensi();
            $table->tipeTransmisi();
            $table->foreign('kendaraanId')->references('kendaraanId')->on('Kendaraan')->cascadeOnDelete()->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Motor', function (Blueprint $table) {
            //
        });
    }
}
