<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('notes', compact('notes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required'
        ]);

        Note::create([
            'user_id' => auth()->id(),
            'content' => $request->content
        ]);

        return redirect('/notes');
    }
}