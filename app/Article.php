<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable = [
		'id',
		'title',
		'title_en',
		'imagen',
		'desc',
		'desc_en',
		'status'
	];

}
