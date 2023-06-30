<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    // Student.php，绑定laravel的student模型与
    // 数据库的student表

    protected $table = 'students';
}
