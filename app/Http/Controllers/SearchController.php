<?php

namespace App\Http\Controllers;

use App\Offeror;
use App\User;
use Illuminate\Http\Request;
use Spatie\Searchable\Search;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $term = ($request->get('term'));
        if (empty($term)) $term = 'xasdfasdfcv';

        $offerors = offeror::where('state', '>', 0)->where('validated',"1");
        $arrayTerm=explode(' ',$term);
        foreach($arrayTerm as $word)
        {
            if(strlen($word) >= 3) {
                $offerors->where('tags','LIKE',"%$word%");
            }
        }

        return view('search.results', ['searchResults' => $offerors->get()]);

    }
}
