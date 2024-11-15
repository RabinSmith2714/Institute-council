<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Consultancy
 * 
 * @property int $id
 * @property string|null $type
 * @property string|null $title
 * @property Carbon|null $date
 * @property float|null $earnings
 * @property string|null $moe
 * @property string|null $uploadfile
 * @property string|null $faculty_name
 * @property string|null $faculty_id
 * @property string|null $status
 *
 * @package App\Models
 */
class Consultancy extends Model
{
	protected $table = 'consultancy';
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime',
		'earnings' => 'float'
	];

	protected $fillable = [
		'type',
		'title',
		'date',
		'earnings',
		'moe',
		'uploadfile',
		'faculty_name',
		'faculty_id',
		'status'
	];
}
