<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// 新建 模型
class Post extends Model
{
    use HasFactory;
    // $table属性用于指定与模型关联的数据库表的名称。默认情况下，
    // Laravel会根据模型类名的复数形式来推断与之对应的数据库表名。
    // 但是，如果你希望使用不同的表名，可以通过在模型中定义$table属性来
    // 指定表名。
    protected $table = 'posts';

    //     $fillable属性定义了'name'和'description'这两个字段可以批量赋值。
    //     这意味着当你使用create方法或fill方法给Post模型赋值时，只有'name'和'description'字段会被接受，其他字段将被忽略。

    // 这个功能有助于防止潜在的安全风险，
    // 例如通过 HTTP 请求将不必要或危险的字段注入到数据库中。
    protected $fillable = [
        'name', 'description'
    ];

    public $timestamps = true;
}
