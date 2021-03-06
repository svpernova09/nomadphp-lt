<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'authors';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'first_name',
        'last_name',
        'pronoun',
        'twitter',

    ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

    public function talks()
    {
        return $this->hasMany('App\Talk');
    }

}
