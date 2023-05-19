<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Tracker extends Model
{
    protected $fillable = ['ip', 'visit_date', 'visit_time'];
    protected $table = 'tb_trackers';

    public static function hit()
    {
        static::updateOrInsert(
            [
                'ip'   => $_SERVER['REMOTE_ADDR'],
                'visit_date' => date('Y-m-d'),
            ],
            [
                'visit_time' => date('H:i:s'),
                'hits' => DB::raw('hits + 1'),
            ]
        );
    }
}
