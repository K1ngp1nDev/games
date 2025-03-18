@extends('layouts.app')

@section('title', 'Game List')

@section('content')
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="table-auto w-full text-left">
        <thead>
        <tr class="bg-gray-100">
            <th class="px-4 py-2">ID</th>
            <th class="px-4 py-2">Title</th>
            <th class="px-4 py-2">Developer</th>
            <th class="px-4 py-2">Genre</th>
            <th class="px-4 py-2">Release Date</th>
            <th class="px-4 py-2">Platform</th>
            <th class="px-4 py-2">Price</th>
            <th class="px-4 py-2">Cover</th>
            <th class="px-4 py-2">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($games as $game)
            <tr class="border-b">
                <td class="px-4 py-2">{{ $game->id }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('games.show', $game->id) }}" class="text-blue-500 underline">
                        {{ $game->title }}
                    </a>
                </td>
                <td class="px-4 py-2">{{ $game->developer }}</td>
                <td class="px-4 py-2">{{ $game->genre }}</td>
                <td class="px-4 py-2">{{ $game->release_date }}</td>
                <td class="px-4 py-2">{{ $game->platform }}</td>
                <td class="px-4 py-2">${{ $game->price }}</td>
                <td class="px-4 py-2">
                    @if($game->cover_image)
                        <img src="{{ asset('storage/' . $game->cover_image) }}" alt="Cover Image" class="max-w-[80px]">
                    @else
                        None
                    @endif
                </td>
                <td class="flex flex-col px-4 py-2 space-y-2">
                    <a href="{{ route('games.edit', $game->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-1 px-2 rounded">
                        Edit
                    </a>
                    <form action="{{ route('games.destroy', $game->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-1 px-2 rounded"
                                onclick="return confirm('Are you sure you want to delete this game?')">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{ $games->withQueryString()->links() }}
    </div>
@endsection
