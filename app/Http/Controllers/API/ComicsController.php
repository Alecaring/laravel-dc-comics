<?php

// app/Http/Controllers/API/NomeController.php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class NomeController extends Controller
{
    public function index()
    {
        return Comic::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descrizione' => 'required|string',
        ]);

        $nome = Comic::create($request->all());

        return response()->json($nome, 201);
    }

    public function show($id)
    {
        $nome = Comic::find($id);

        if (is_null($nome)) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        return response()->json($nome);
    }

    public function update(Request $request, $id)
    {
        $nome = Comic::find($id);

        if (is_null($nome)) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'descrizione' => 'sometimes|required|string',
        ]);

        $nome->update($request->all());

        return response()->json($nome);
    }

    public function destroy($id)
    {
        $nome = Comic::find($id);

        if (is_null($nome)) {
            return response()->json(['message' => 'Not Found'], 404);
        }

        $nome->delete();

        return response()->json(null, 204);
    }
}