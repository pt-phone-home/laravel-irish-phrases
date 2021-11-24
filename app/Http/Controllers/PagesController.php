<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phrase;

class PagesController extends Controller
{

    public function home() {
        $phrases = Phrase::all()->random(15);
        $phrasesInEnglish = Phrase::all()->random(20);
        return view('home')->with(['phrases' => $phrases, 'phrasesInEnglish' => $phrasesInEnglish]);
    }

       public function data_dump() {
        $phrases = Phrase::all();
        return view('data_dump')->with(['phrases' => $phrases]);
    }

    public function search(Request $request) {
        $totalPhrases = Phrase::all()->count();
        // dd($totalPhrases);
        
        $searchTerm = trim($request['searchTerm']);

        $phrases = Phrase::where('english','like', $searchTerm .' %')
                    ->orWhere('english', 'like', '% ' . $searchTerm)
                    ->orWhere('english', 'like', '% ' . $searchTerm . ' %')
                    ->orWhere('english', 'like', $searchTerm)
                    ->orWhere('irish','like', $searchTerm .' %')
                    ->orWhere('irish', 'like', '% ' . $searchTerm)
                    ->orWhere('irish', 'like', '% ' . $searchTerm . ' %')
                    ->orWhere('irish', 'like', $searchTerm)
                    ->take(20)
                    ->get();
        return view('results_page')->with(['phrases' => $phrases]);
    }

    public function random() {
        $phrasesInEnglish = Phrase::all()->random(20);
        $phrasesInIrish = Phrase::all()->random(20);
        return view('random_phrases')->with(['phrasesInIrish' => $phrasesInIrish, 'phrasesInEnglish' => $phrasesInEnglish]);
    }

    public function random_by_id($id) {
        $phrasesInEnglish = Phrase::all()->random(20);
        $phrasesInIrish = Phrase::all()->random(20);
        $phrase = Phrase::findOrFail($id);
        return view('random_by_id')->with(['phrase' => $phrase, 'phrasesInIrish' => $phrasesInIrish, 'phrasesInEnglish' => $phrasesInEnglish]);
    }
}
