<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Conference
 * 
 * @property int $id
 * @property string|null $title
 * @property string|null $organiser
 * @property string|null $publisher_name
 * @property string|null $indexing_detail
 * @property string|null $level
 * @property Carbon|null $date
 * @property string|null $title_of_paper
 * @property string|null $isbn
 * @property string|null $no_of_authors
 * @property string|null $authors_position
 * @property string|null $link
 * @property string|null $upload
 * @property string|null $faculty_name
 * @property string|null $faculty_id
 * @property string|null $status
 *
 * @package App\Models
 */
class Conference extends Model
{
	protected $table = 'conference';
	public $timestamps = false;

	protected $casts = [
		'date' => 'datetime'
	];

	protected $fillable = [
		'title',
		'organiser',
		'publisher_name',
		'indexing_detail',
		'level',
		'date',
		'title_of_paper',
		'isbn',
		'no_of_authors',
		'authors_position',
		'link',
		'upload',
		'faculty_name',
		'faculty_id',
		'status'
	];
}
