<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string|null $name
 * @property string|null $shortened_name
 * @property string|null $username
 * @property string|null $password
 * @property string|null $role
 * 
 * @property Collection|Monthlytarget[] $monthlytargets
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	public $timestamps = false;

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'name',
		'shortened_name',
		'username',
		'password',
		'role'
	];

	public function monthlytargets()
	{
		return $this->hasMany(Monthlytarget::class, 'department_id');
	}
}
