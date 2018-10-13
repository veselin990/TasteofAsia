<?php

namespace TasteofAsia;

use Illuminate\Database\Eloquent\Model;

class Meni extends Model
{
    protected $fillable = [
        'category_id',
        'naslov',
        'sadrzaj',
        'cena'
    ];

    public function category()
    {
        return $this->belongsTo('TasteofAsia\Category');
    }

}


