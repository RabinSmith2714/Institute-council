<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Faculty
 * 
 * @property int $uid
 * @property string $id
 * @property string $name
 * @property string $dept
 * @property string $design
 * @property string $role
 * @property Carbon $doj
 * @property string $pass
 * @property string $cert
 * @property int $bc
 * @property int $ac
 *
 * @package App\Models
 */
class Faculty extends Model
{
	protected $table = 'faculty';
	protected $primaryKey = 'uid';
	public $timestamps = false;

	protected $casts = [
		'doj' => 'datetime',
		'bc' => 'int',
		'ac' => 'int'
	];

	protected $fillable = [
		'id',
		'name',
		'dept',
		'design',
		'role',
		'doj',
		'pass',
		'cert',
		'bc',
		'ac'
	];
}
