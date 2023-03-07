<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Kendaraan;

class UpdateKendaraanTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Kendaraan', function (Blueprint $table) {
            $table->increments('kendaraanId')->autoIncrement()->change();
            $table->year('tahunKeluaran')->change();
            $table->warna();
            $table->harga();
            $table->jumlahStok();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Kendaraan', function (Blueprint $table) {
            //
        });
    }
}
