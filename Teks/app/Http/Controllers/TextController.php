<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index()
    {
        $text = Text::first();
        return view('welcome', compact('text'));
    }

    public function admin()
    {
        $text = Text::first();
        return view('admin', compact('text'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'content' => 'required'
        ]);

        $text = Text::first();
        if (!$text) {
            $text = new Text();
        }

        $text->content = $request->input('content');
        $text->save();

        return redirect('/admin')->with('success', 'Text updated successfully');
    }
}
