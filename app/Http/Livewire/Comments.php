<?php

namespace App\Http\Livewire;
use App\Models\Comment;

use Livewire\Component;

class Comments extends Component
{
    public $count= 1;
    public $newComment;

    public $comments;

    public function addComment() {
        if($this->newComment =='') return;

        $createdComment = Comment::create(['body'=> $this->newComment, 'user_id'=>1]);

        $this->comments->push( $createdComment );

        $this->reset('newComment');
        $this->increment();
    }

    public function mount( ) {
        $initialComments = Comment::All();

        $this->comments = $initialComments;

        $this->count = $initialComments->count();

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
