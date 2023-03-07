<?php

namespace App\Models;
use App\Models\Kendaraan;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Motor extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'Motor';

    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraanId');
    }
}
