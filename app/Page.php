<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model {

    use SoftDeletes;

    protected $fillable = [
        'name',
        'type',
        'image',
        'text_es',
        'text_en',
    ];

    protected $dates = ['deleted_at'];
}
