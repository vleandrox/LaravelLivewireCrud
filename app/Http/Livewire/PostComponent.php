<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Post;
//use Livewire\WithPagination;

class PostComponent extends Component
{
    //use WithPagination;

    public function render()
    {
        
        return view('livewire.post-component',[
            'post'=>Post::orderBy('id','desc')->paginate(8)
        ]);
    }
}
