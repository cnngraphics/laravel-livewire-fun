<?php

namespace App\Http\Livewire;
use Carbon\Carbon;

use Livewire\Component;

class Comments extends Component
{
    public $count= 1;
    public $newComment;

    public $comments;

    public function addComment() {
        if($this->newComment =='') return;

        array_unshift($this->comments, [
            'body' => $this->newComment,
            'created_at' => Carbon::now()->diffForHumans(),
            'author' => 'Mike'

        ]);
        $this->reset('newComment');
        $this->increment();
    }

    public function mount( $initialComments ) {

//        dd($comments);
        $this->comments = $initialComments;
    }

    public function render()
    {
        return view('livewire.comments');
    }

    public function increment() {
        $this->count++;
    }

    public function decrement(){
        $this->count --;
    }
}
