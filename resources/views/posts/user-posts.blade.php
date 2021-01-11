@extends('layouts.app')

@section('content')
    <div class="flex flex-col items-center">
        
        @if($posts->count())
        <div class="w-6/12">
            <div class="p-3 mb-2">
                <h1 class="text-lg font-bold">{{ $user->name }}</h1>
                <p>Posted {{ $posts->count() }}  {{ Str::plural('time', $posts->count()) }}</p>
                <p class="text-sm text-gray-500">Total likes: {{ $user->receivedLikes()->count() }}</p>
            </div>
            <div class="bg-white rounded-lg w-full p-3 shadow-lg">
                <ul>
                    @foreach($posts as $post)
                    <x-post :post="$post"/>
                    @endforeach
                </ul>
                {{ $posts->links() }}
            </div>
            @else
            <div class="bg-white rounded-lg w-6/12 p-3 shadow-lg">
                <h1 class="text-lg">No posts to see</h1>
            </div>
        </div>
        @endif
        
    </div>  
@endsection