@extends('layouts.app')

@section('title', 'Game Details')

@section('content')
    <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/3">
                @if($game->cover_image)
                    <img src="{{ asset('storage/' . $game->cover_image) }}" alt="Cover Image" class="rounded-md object-cover w-full h-full">
                @else
                    <div class="w-full h-48 bg-gray-200 flex items-center justify-center rounded-md">
                        <span class="text-gray-500">No Image</span>
                    </div>
                @endif
            </div>
            <div class="md:w-2/3 md:pl-6 mt-4 md:mt-0">
                <h2 class="text-3xl font-bold mb-2">{{ $game->title }}</h2>
                <p class="text-gray-700 mb-1"><strong>Developer:</strong> {{ $game->developer }}</p>
                <p class="text-gray-700 mb-1"><strong>Genre:</strong> {{ $game->genre }}</p>
                <p class="text-gray-700 mb-1"><strong>Release Date:</strong> {{ $game->release_date }}</p>
                <p class="text-gray-700 mb-1"><strong>Platform:</strong> {{ $game->platform }}</p>
                <p class="text-gray-700 mb-1"><strong>Price:</strong> ${{ $game->price }}</p>
            </div>
        </div>
        <div class="mt-6 flex space-x-4">
            <a href="{{ route('games.edit', $game->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                Edit
            </a>
            <a href="{{ route('games.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Back to List
            </a>
        </div>
    </div>
@endsection
