<?php

namespace App\Http\Controllers;

use App\Models\Citation;
use App\Models\Tag;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index(){
        $tags = Tag::all();
        $citations = Citation::paginate(10);

        return view('1 Quotes.index', compact('citations', 'tags'));
    }
}
