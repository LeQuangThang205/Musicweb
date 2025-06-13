<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    // use Notifiable, HasApiTokens; // Giữ lại nếu bạn đang dùng

    protected $fillable = [
        'name',
        'email',
        'password',
        'avatar',
        'role', // Giữ nguyên dòng này
    ];

    // Phương thức kiểm tra vai trò
    public function hasRole($roleName)
    {
        // Kiểm tra xem giá trị cột 'role' của người dùng có khớp với vai trò được truyền vào không
        return $this->role === $roleName;
    }

    // Các phương thức tiện ích để kiểm tra vai trò cụ thể
    public function isAdmin()
    {
        return $this->hasRole('admin');
    }

    public function isUser()
    {
        return $this->hasRole('user');
    }
    }
