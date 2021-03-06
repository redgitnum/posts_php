@extends('layouts.app')

@section('content')
    <div class="flex justify-center">
        <div class="bg-white rounded-lg w-3/12 p-4 shadow-lg">
            <h1 class="text-xl text-center mb-2">Register</h1>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="mb-2">
                    <input type="text" id="name" name="name" class="bg-gray-50 @error('name') border-red-500 @enderror w-full rounded-md border-2 p-3" 
                    placeholder="Your Name" value="{{ old('name') }}"/>
                    @error('name')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <input type="text" id="username" name="username" class="bg-gray-50 @error('name') border-red-500 @enderror w-full rounded-md border-2 p-3" 
                    placeholder="Your Username" value="{{ old('username') }}"/>
                    @error('username')
                        <div class="text-red-500 mt-2 text-sm">{{ $message }}</div>
                    @enderror
                </div>
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
                    <input type="password" id="password_confirmation" name="password_confirmation" class=" bg-gray-50 w-full rounded-md border-2 p-3" 
                    placeholder="Repeat your Password" value=""/>
                </div>
                <button type="submit" class="rounded-lg bg-blue-500 text-white font-medium w-full p-3">Register</button>
            </form>
        </div>
    </div>  
@endsection