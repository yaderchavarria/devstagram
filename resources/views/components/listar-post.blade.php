<div>
    @if ($posts->count())
    <div class="grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 p-12">
        @foreach ($posts as $post )
            <div>
                <a href="{{route('posts.show',['post' => $post, 'user' => $post->user])}}">
                    <img src="{{ asset('uploads') . '/' . $post->imagen}}" alt="imagen del post {{$post->titulo}}">
                </a>
            </div>
        @endforeach
    </div>
    
    <div class="my-10 p-12">
        {{$posts->links()}}
    </div>
    
    @else
        <p class="text-center">no hay posts</p>
    @endif
</div>