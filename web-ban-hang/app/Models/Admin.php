<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    // Bạn có thể định nghĩa bảng và bất kỳ thuộc tính tùy chỉnh nào khác ở đây
    protected $table = 'admin';
    
    // Định nghĩa các thuộc tính có thể gán hàng loạt
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Ẩn các thuộc tính mà bạn không muốn hiển thị trong mảng
    protected $hidden = [
        'password', 'remember_token',
    ];

    // Chuyển đổi các thuộc tính thành kiểu nguyên thủy
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
