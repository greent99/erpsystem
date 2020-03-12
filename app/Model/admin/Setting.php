<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table="setting";

    public static function getValueUrl($url)
    {
        return Setting::select()->where('url',$url)->first();
    }
}
