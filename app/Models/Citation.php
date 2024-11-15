<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Citation
 * 
 * @property int $id
 * @property Carbon $date
 * @property int $count
 *
 * @package App\Models
 */
class Citation extends Model
{
	protected $table = 'citation';
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime',
		'count' => 'int'
	];

	protected $fillable = [
		'date',
		'count'
	];
}
