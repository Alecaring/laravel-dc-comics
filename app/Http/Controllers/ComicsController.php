<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index()
    {
        // Recupera tutti i dati dal modello
        $comic = Comic::all();
        // Passa i dati alla view
        return view('home', compact('comic'));
    }
}
