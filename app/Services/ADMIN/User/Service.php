<?php

namespace App\Services\ADMIN\User;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Storage;
//
//
use App\Models\User;

class Service {

	public function update($user,$param) {

		try {
			DB::beginTransaction();

			if(isset($param['new_password']) && $param['new_password']) {
				$param['password'] = Hash::make($param['new_password']);
			}
 
			
			$user->update($param);
			// dd($user);
 
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $user;
	}

    public function store($param) {
		try {
			DB::beginTransaction();

			$password = Str::random(10);
			$param['password'] = Hash::make($password);
	
			$user = User::firstOrCreate(['email' => $param['email']],$param);


			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $user;

    }
}