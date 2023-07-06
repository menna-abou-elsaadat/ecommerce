<?php

namespace App\Services;

use App\Models\User;
use Hash;

class UserService
{
	public static function store($name,$email,$password)
	{
		$user = new User();
		$user->name = $name;
		$user->email = $email;
		$user->password = Hash::make($password);
		$user->role_id = config('constants.user_role_id');
		$user->save();

		return $user;
	}

}
?>