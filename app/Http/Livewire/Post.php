<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Post extends Component
{
    public $readyToLoad = false;

    public function loadPosts()
    {
        $this->readyToLoad = true;
    }

    public function render()
    {
        return view('livewire.post', [
            'posts' => $this->readyToLoad
                ? \App\Post::all()
                : [],
        ]);
    }
}
