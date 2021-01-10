@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center">

        <div class="bg-white rounded-lg w-6/12 p-3 shadow-lg mb-2">
            <h1 class="text-lg">Send new Post</h1>
            <form action="{{ route('posts') }}" method="POST">
                @csrf
                @error('body')
                <div class="text-sm text-red-500 mt-2">
                    {{ $message }}
                </div>
                @enderror
                <Textarea id="body" name="body" class="bg-gray-100 border-2 @error('body') border-red-500 @enderror w-full rounded-lg p-3 my-3" placeholder="Post Something!"></Textarea>
                <button type="submit" class="bg-blue-500 text-white p-2 px-6 rounded-lg">Send Post</button>
            </form>
        </div>
        @if($posts->count())
        <div class="bg-white rounded-lg w-6/12 p-3 shadow-lg">
            <h1 class="text-lg mb-2">Posts</h1>
            <ul>
                @foreach($posts as $post)
                <li class="mb-3">
                    <p class="font-bold inline mr-1">{{ $post->user->username }}</p>
                    <span class="text-gray-500 text-sm">{{ $post->created_at->diffForHumans() }}</span>
                    <div>{{ $post->body }}</div>
                </li>
                @endforeach
            </ul>
            {{ $posts->links() }}
        </div>
        @else
        <div class="bg-white rounded-lg w-6/12 p-3 shadow-lg">
            <h1 class="text-lg">No posts to see</h1>
        </div>
        @endif
        
    </div>  
@endsection