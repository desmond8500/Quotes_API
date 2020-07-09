<?php

namespace App\Http\Controllers;

use App\Models\Citation;
use App\Models\Tag;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function index(){
        $citation_tags = Tag::all();

        $tag_array[] = null;
        foreach ($citation_tags as $key => $tag) {
            array_push($tag_array, array('id' => $tag->id, 'text' => $tag->name));
        }
        $tags = "<script> var data = ".json_encode($tag_array)." </script>";

        $citations = Citation::paginate(10);

        return view('1 Quotes.index', compact('citations', 'tags'));
    }

    public function getQuote(){
        $random = random_int(1, Citation::count());
        $quote = Citation::find($random);


        return  $quote->toJson(JSON_PRETTY_PRINT);
    }
}
