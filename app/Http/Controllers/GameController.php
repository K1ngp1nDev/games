<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index(Request $request)
    {
        $query = Game::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where('title', 'like', "%{$search}%")
                ->orWhere('genre', 'like', "%{$search}%")
                ->orWhere('platform', 'like', "%{$search}%");
        }

        $games = $query->paginate(10);
        return view('index', compact('games'));
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view('show', compact('game'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'        => 'required|string|max:255',
            'developer'    => 'required|string|max:255',
            'genre'        => 'required|string|max:255',
            'release_date' => 'required|date',
            'platform'     => 'required|string|max:255',
            'price'        => 'required|numeric',
            'cover_image' => 'nullable|image|max:2048'
        ]);

        $gameData = $request->all();

        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('cover_images', 'public');
            $gameData['cover_image'] = $path;
        }

        Game::create($gameData);

        return redirect()->route('games.index')
            ->with('success', 'Game created successfully.');
    }

    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('edit', compact('game'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'        => 'required|string|max:255',
            'developer'    => 'required|string|max:255',
            'genre'        => 'required|string|max:255',
            'release_date' => 'required|date',
            'platform'     => 'required|string|max:255',
            'price'        => 'required|numeric',
            'cover_image' => 'nullable|image|max:2048'
        ]);

        $gameData = $request->all();

        if ($request->hasFile('cover_image')) {
            $path = $request->file('cover_image')->store('cover_images', 'public');
            $gameData['cover_image'] = $path;
        }

        $game = Game::findOrFail($id);
        $game->update($gameData);

        return redirect()->route('games.index')
            ->with('success', 'Information updated successfully.');
    }

    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect()->route('games.index')
            ->with('success', 'Game deleted successfully.');
    }
}
