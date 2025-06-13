<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'avatar',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

    public const  MIN_PASSWORD = 6;
    public const ROLE_ADMIN = 0;
    public const ROLE_LECTURE = 1;
    public const ROLE_STUDENT = 2;

    public static function passwordRules()
    {
        return [
            'password' => 'required|min:' . self::MIN_PASSWORD,
        ];
    }

    // Hàm tiện ích để lấy tên role
    public static function getRoleOptions()
    {
        return [
            self::ROLE_ADMIN => 'Admin',
            self::ROLE_LECTURE => 'Lecture',
            self::ROLE_STUDENT => 'Student',
        ];
    }

    public function getRoleName()
    {
        return self::getRoleOptions()[$this->role] ?? 'Unknown';
    }
}
