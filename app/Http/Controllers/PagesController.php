<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phrase;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

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
        $query = trim($request['searchTerm']);

        $query_split = explode(' ', $query);

        $located_results = collect([]);

        function phrase_query($query_split) {
            $test_results = [];
            foreach ($query_split as $query_term) {
                print($query_term);
                $found = Phrase::where('english', 'like', '% ' . $query_term . ' %')
                        ->orWhere('irish', 'like', '% ' . $query_term . ' %')
                        ->get();
           
                array_push($test_results, $found);
            }
         
            $results_final = collect($test_results)->flatten()->groupBy('id')->sortByDesc(function ($phrase) {
                return $phrase->count();
            })->flatten()->unique();
            return $results_final;
        }
       
            $final_results = phrase_query($query_split)->take(20);
        return view('results_page')->with(['phrases' => $final_results]);

        // $phrases = Phrase::where('english','like', $searchTerm .' %')
        //                 ->orWhere('english', 'like', '% ' . $searchTerm)
        //                 ->orWhere('english', 'like', '% ' . $searchTerm . ' %')
        //                 ->orWhere('english', 'like', $searchTerm)
        //                 ->orWhere('irish','like', $searchTerm .' %')
        //                 ->orWhere('irish', 'like', '% ' . $searchTerm)
        //                 ->orWhere('irish', 'like', '% ' . $searchTerm . ' %')
        //                 ->orWhere('irish', 'like', $searchTerm)
        //                 ->take(20)
        //                 ->get();
        //     return view('results_page')->with(['phrases' => $phrases]);


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
