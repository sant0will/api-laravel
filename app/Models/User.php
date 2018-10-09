<?php

/**
 * Created by Reliese Model.
 * Date: Tue, 09 Oct 2018 16:56:05 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class User
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
 *
 * @package App\Models
 */
class User extends Eloquent
{
	public $timestamps = false;

	protected $fillable = [
		'first_name',
		'last_name',
		'phone',
		'email'
	];
}
