<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Journal
 * 
 * @property int $id
 * @property string|null $type
 * @property string|null $title
 * @property int $volume
 * @property int $issuenumber
 * @property int $page
 * @property Carbon|null $date
 * @property string|null $link
 * @property int $noauthor
 * @property string $position
 * @property string|null $uploadfile
 * @property string|null $faculty_name
 * @property string|null $faculty_id
 * @property string|null $status
 *
 * @package App\Models
 */
class Journal extends Model
{
	protected $table = 'journal';
	public $timestamps = false;

	protected $casts = [
		'volume' => 'int',
		'issuenumber' => 'int',
		'page' => 'int',
		'date' => 'datetime',
		'noauthor' => 'int'
	];

	protected $fillable = [
		'type',
		'title',
		'volume',
		'issuenumber',
		'page',
		'date',
		'link',
		'noauthor',
		'position',
		'uploadfile',
		'faculty_name',
		'faculty_id',
		'status'
	];
}
