<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Monthlytarget
 * 
 * @property int $id
 * @property int|null $department_id
 * @property Carbon|null $month
 * @property int|null $awarenessprogram
 * @property int|null $conference
 * @property int|null $consultancy
 * @property int|null $fundedprojects
 * @property int|null $journal
 * @property int|null $patents
 * 
 * @property User|null $user
 *
 * @package App\Models
 */
class Monthlytarget extends Model
{
	protected $table = 'monthlytargets';
	public $timestamps = false;

	protected $casts = [
		'department_id' => 'int',
		'month' => 'datetime',
		'awarenessprogram' => 'int',
		'conference' => 'int',
		'consultancy' => 'int',
		'fundedprojects' => 'int',
		'journal' => 'int',
		'patents' => 'int'
	];

	protected $fillable = [
		'department_id',
		'month',
		'awarenessprogram',
		'conference',
		'consultancy',
		'fundedprojects',
		'journal',
		'patents'
	];

	public function user()
	{
		return $this->belongsTo(User::class, 'department_id');
	}
}
