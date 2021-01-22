<?php

namespace App\Http\Livewire;
use Carbon\Carbon;

use Livewire\Component;

class Comments extends Component
{
    public $count= 1;
    public $newComment;

    public $comments = [
        [
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium asperiores.',
            'created_at' => '3 minutes ago',
            'author' => 'Theo'

        ]

    ];

    public function addComment() {
        if($this->newComment =='') return;

        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'author' => 'Bob'

        ]);
        $this->reset('newComment');
        $this->increment();
    }

    public function increment() {
        $this->count++;
    }



    public function decrement(){
        $this->count --;
    }


    public function render()
    {
        return view('livewire.comments');
    }
}
