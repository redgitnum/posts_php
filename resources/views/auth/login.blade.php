@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-white rounded-lg w-3/12 p-4 shadow-lg">
            <h1 class="text-xl text-center mb-2">Log in</h1>

            @if(session('status'))
            <div class="text-red-500 mb-2 text-sm">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <input type="email" id="email" name="email" class="bg-gray-50 @error('name') border-red-500 @enderror w-full rounded-md border-2 p-3" 
                    placeholder="Your Email" value="{{ old('email') }}"/>
                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <input type="password" id="password" name="password" class="bg-gray-50 @error('name') border-red-500 @enderror w-full rounded-md border-2 p-3" 
                    placeholder="Your Password" value=""/>
                    @error('password')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <input type="checkbox" id="remember" name="remember" class="mr-2"/>
                    <label for="remember">Remember me:</label>
                </div>
                <button type="submit" class="rounded-lg bg-blue-500 text-white font-medium w-full p-3">Login</button>
            </form>
        </div>
    </div>  
@endsection