<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model {

    protected $fillable = [
        'name',
        'email',
        'job_es',
        'job_en',

        'type',

        'info_es',
        'info_en',

        'list_es',
        'list_en',

        'text_es',
        'text_en'
    ];
}
