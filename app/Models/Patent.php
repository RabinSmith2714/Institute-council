<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Patent
 * 
 * @property int $id
 * @property string|null $title
 * @property string|null $field_of_innovation
 * @property string|null $date
 * @property string|null $status
 * @property int|null $no_of_authors
 * @property int|null $authors_position
 * @property string|null $file_name
 * @property string|null $faculty_name
 * @property string|null $faculty_id
 *
 * @package App\Models
 */
class Patent extends Model
{
	protected $table = 'patents';
	public $timestamps = false;

	protected $casts = [
		'no_of_authors' => 'int',
		'authors_position' => 'int'
	];

	protected $fillable = [
		'title',
		'field_of_innovation',
		'date',
		'status',
		'no_of_authors',
		'authors_position',
		'file_name',
		'faculty_name',
		'faculty_id'
	];
}
