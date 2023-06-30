<?php

namespace App\Http\Livewire\Crud;

use Livewire\Component;

class IndexComponent extends Component
{
    //定义了 render() 方法，该方法负责处理请求
    //并返回渲染的视图。
    public function render()
    {
        //在 render() 方法中，使用 view() 函数指定了要渲染的视图文件路径为..


        // layout('livewire.layouts.base') 指定了一个名为 'livewire.layouts.base' 的布局视图，
        //它将被用作 IndexComponent 组件的父级布局。
        //组件视图将被插入到布局视图的适当位置，以形成最终的渲染输出。

        ///  把index-component.blade的内容         插入到                     base.blade.php的{{$slot}}里
        return view('livewire.crud.index-component')->layout('livewire.layouts.base');
    }
}
