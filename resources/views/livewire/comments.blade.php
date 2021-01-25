<div class="w-full">
    <div class="h-2 bg-indigo"></div>
    <div class="flex items-center justify-center ">
        <div class="container mx-24 bg-white rounded shadow-lg">
            <div class="px-12 py-6">
                <div class="text-center">
                    <h1 class="font-normal text-3xl text-grey-darkest bg-teal leading-loose my-3 w-full">Add Comment: {{$count}}</h1>
                    <div class="w-full text-center">

                        <form wire:submit.prevent="addComment" >
                            <div class="max-w-sm mx-auto p-1 pr-0 flex items-center">
                                <input type="text"
{{--                                       wire:model.debounce.800ms="newComment"--}}
{{--                                       wire:model.lazy="newComment"--}}
                                       wire:model.defer="newComment"

                                       name="comment" placeholder="Your Comment here"
                                       class="flex-1 appearance-none rounded shadow p-3 text-grey-dark mr-2 focus:outline-none">
                                <button type="submit" class="appearance-none bg-indigo text-white
                                text-base font-semibold tracking-wide uppercase p-3 rounded
                                shadow hover:bg-indigo-light"

                                >Add Comment </button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

            @foreach($comments as $comment)
                <div class="p-3 mb-10 max-w-lg mx-auto bg-white rounded-xl shadow-md flex items-center space-x-8">
                        <div >

                            <p class="text-gray-500">{{ $comment->body  }}</p>
                            <p class="text-gray-500 pt-4"> {{ $comment->author }}: {{ $comment->created_at->diffForHumans() }}</p>

                        </div>
                </div>
            @endforeach
        </div>
    </div>
</div>



