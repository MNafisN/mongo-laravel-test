<?php

use App\Models\Kendaraan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKendaraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('Kendaraan'))
        {
            Schema::create('Kendaraan', function (Blueprint $table) {
                $table->kendaraanId();
                $table->tahunKeluaran();
                $table->warna();
                $table->harga();
                $table->jumlahStok();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Kendaraan');
    }
}
