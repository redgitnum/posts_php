@extends('layouts.app')

@section('content')
    <div class="flex justify-center">

        <div class="bg-white rounded-lg w-8/12 p-3">
            <h1 class="text-lg">Dashboard</h1>
            <h2>Welcome back {{ auth()->user()->name }}</h2>
        </div>
    </div>  
@endsection