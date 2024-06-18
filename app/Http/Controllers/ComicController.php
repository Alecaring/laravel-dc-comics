<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Comic::all();
        return view('comic.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descrizione' => 'required|string',
        ]);

        Comic::create([
            'nome' => $request->input('nome'),
            'descrizione' => $request->input('descrizione'),
        ]);

        return redirect()->route('comic.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comic = Comic::findOrFail($id);
        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        {
            $comic = Comic::findOrFail($id);
            return view('comic.edit', compact('comic'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $request->validate([
                'nome' => 'required|string|max:255',
                'descrizione' => 'required|string',
            ]);
    
            $comic = Comic::findOrFail($id);
            $comic->update([
                'nome' => $request->input('nome'),
                'descrizione' => $request->input('descrizione'),
            ]);
    
            return redirect()->route('comic.index')->with('success', 'Comic updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $comic = Comic::findOrFail($id);
        $comic->delete();


        return redirect()->route('comic.index')->with('success', 'Comic deleted successfully');
    }
}
