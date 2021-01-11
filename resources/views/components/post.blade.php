@props(['post' => $post])

<li class="mb-3">
    <a href="{{ route('user.posts', $post->user) }}" class="font-bold inline mr-1">{{ $post->user->username }}</a>
    <span class="text-gray-500 text-sm">{{ $post->created_at->diffForHumans() }}</span>
    <div>{{ $post->body }}</div>
    @auth()
    <div class="flex">
        @if(!$post->likedBy(auth()->user()))
        <form action="{{ route('posts.like', $post) }}" method="POST">
            @csrf
            <button type="submit" class="text-blue-500 text-sm mr-2">Like</button>
        </form>
        @else
        <form action="{{ route('posts.like', $post) }}" method="POST">
            @method('delete')
            @csrf
            <button type="submit" class="text-blue-500 text-sm">Unlike</button>
        </form>
        @endif

        @can('delete', $post)
            <form action="{{ route('posts.destroy', $post) }}" method="POST">
                @method('delete')
                @csrf
                <button type="submit" class="text-red-500 text-sm ml-2">Delete</button>
            </form>
        @endcan
        <span class="ml-4">{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
    </div>
    @endauth
</li>