<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

	const ROLE_ADMIN = 1;
	const ROLE_OWNER = 10;
	const ROLE_MANAGER = 20;
	const ROLE_BLOG = 40;
	const ROLE_READER = 50;

    protected $fillable = [
        'name',
        'email',
        'password',
        'order',
        'status',
        'published',
		'role',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


	public static function getRoles(){
		return [
			self::ROLE_ADMIN => 'Админ',
			self::ROLE_OWNER => 'Руководство',
			self::ROLE_MANAGER => 'Сотрудник',
			self::ROLE_BLOG => 'Автор',
			self::ROLE_READER => 'Читатель',
		];
	}

	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}


	public function getLatestCommentByUser()
    {
        return $this->comments()->latest()->first();
    }
    public function canUserPostComment($data)
    {
        return $data['latestCommentCreated']->diffInMinutes() < $data['userCommentFrequency'];
    }
}
