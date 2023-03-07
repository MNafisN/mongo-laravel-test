<?php

namespace App\Models;
use App\Models\Motor;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Kendaraan extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Kendaraan';

    protected $fillable = ['tahunKeluaran', 'warna', 'harga', 'jumlahStok'];

    public function motor()
    {
        return $this->hasOne(Motor::class, 'kendaraanId');
    }
}
