<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Fundedproject
 * 
 * @property int $id
 * @property string|null $type
 * @property string|null $title
 * @property string|null $projectid
 * @property string|null $fundingagency
 * @property string|null $link
 * @property Carbon|null $date
 * @property float|null $requestedamount
 * @property string|null $status
 * @property string|null $uploadfile
 * @property string|null $faculty_name
 * @property string|null $faculty_id
 *
 * @package App\Models
 */
class Fundedproject extends Model
{
	protected $table = 'fundedprojects';
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime',
		'requestedamount' => 'float'
	];

	protected $fillable = [
		'type',
		'title',
		'projectid',
		'fundingagency',
		'link',
		'date',
		'requestedamount',
		'status',
		'uploadfile',
		'faculty_name',
		'faculty_id'
	];
}
