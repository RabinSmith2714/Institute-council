<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Hindex
 * 
 * @property int $id
 * @property Carbon $date
 * @property int $count
 *
 * @package App\Models
 */
class Hindex extends Model
{
	protected $table = 'hindex';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'date' => 'datetime',
		'count' => 'int'
	];

	protected $fillable = [
		'date',
		'count'
	];
}
