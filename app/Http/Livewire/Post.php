<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Post as Posts;
/// 组件
/// 组件
/// 组件
class Post extends Component
{
    // 公共变量
    public $posts, $name, $description, $post_id;

    // Validation Rules 数据检查规则
    protected $rules = [
        'name' => 'required',
        'description' => 'required'
    ];


    public function render()
    {
        //通过模型查询数据
        // 然后赋值给 posts变量
        $this->posts = Posts::select('id', 'name', 'description')->get();
        return view('livewire.post');
    }
}
