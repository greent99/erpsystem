<?php

namespace App\Model\admin;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    protected $table="language";
    public static function getLanguageFull($paginate,$sort='DESC')
    {
        return Language::select()
            ->orderBy('sort',$sort)
            ->orderBy('created_at',$sort)
            ->orderBy('updated_at',$sort)
            ->paginate($paginate);
    }
    public static function getLanguageFullSearch($keysearch,$invisble)
    {

    }
}
