<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Talk extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'talks';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'name',
        'description',
        'author_id',
        'joindin'

    ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

    public function author()
    {
        return $this->belongsTo('App\Author');
    }

}
