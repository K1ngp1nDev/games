@extends('layouts.app')

@section('title', 'Edit Game')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Game</h1>

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('games.update', $game->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="title" class="block mb-2">Title</label>
            <input type="text" name="title" id="title" class="border rounded w-full py-2 px-3" value="{{ old('title', $game->title) }}">
        </div>
        <div class="mb-4">
            <label for="developer" class="block mb-2">Developer</label>
            <input type="text" name="developer" id="developer" class="border rounded w-full py-2 px-3" value="{{ old('developer', $game->developer) }}">
        </div>
        <div class="mb-4">
            <label for="genre" class="block mb-2">Genre</label>
            <input type="text" name="genre" id="genre" class="border rounded w-full py-2 px-3" value="{{ old('genre', $game->genre) }}">
        </div>
        <div class="mb-4">
            <label for="release_date" class="block mb-2">Release Date</label>
            <input type="date" name="release_date" id="release_date" class="border rounded w-full py-2 px-3" value="{{ old('release_date', $game->release_date) }}">
        </div>
        <div class="mb-4">
            <label for="platform" class="block mb-2">Platform</label>
            <input type="text" name="platform" id="platform" class="border rounded w-full py-2 px-3" value="{{ old('platform', $game->platform) }}">
        </div>
        <div class="mb-4">
            <label for="price" class="block mb-2">Price (USD)</label>
            <input type="number" step="0.01" name="price" id="price" class="border rounded w-full py-2 px-3" value="{{ old('price', $game->price) }}">
        </div>
        <div class="mb-4">
            <label for="cover_image" class="block mb-2">Game Cover (Image)</label>
            <input type="file" name="cover_image" id="cover_image" class="border rounded w-full py-2 px-3">
        </div>
        @if($game->cover_image)
            <div class="mb-4">
                <p class="mb-2">Current Cover:</p>
                <img src="{{ asset('storage/' . $game->cover_image) }}" alt="Cover Image" class="max-w-xs">
            </div>
        @endif
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Update
        </button>
        <button type="button" class="bg-blue-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            <a href="{{ route('games.index') }}">Cancel</a>
        </button>
    </form>
@endsection
