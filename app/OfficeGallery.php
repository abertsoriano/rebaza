<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class OfficeGallery extends Model {

	protected $table = 'offices_gallery';

	protected $fillable = ['id', 'name', 'image'];

}
