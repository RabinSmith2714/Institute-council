<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Awarenessprogram
 * 
 * @property int $id
 * @property string $organiserName
 * @property string $programName
 * @property string $placeHeld
 * @property string $programDetails
 * @property string $speaker
 * @property string $uploadfile
 * @property Carbon $date
 * @property string $faculty_name
 * @property string $faculty_id
 * @property string|null $status
 *
 * @package App\Models
 */
class Awarenessprogram extends Model
{
	protected $table = 'awarenessprogram';
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'organiserName',
		'programName',
		'placeHeld',
		'programDetails',
		'speaker',
		'uploadfile',
		'date',
		'faculty_name',
		'faculty_id',
		'status'
	];
}
