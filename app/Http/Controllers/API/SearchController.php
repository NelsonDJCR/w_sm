<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Offeror;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $term = ($request->get('term'));
        if (empty($term)) $term = 'xasdfasdfcv';

        $offerors = offeror::where('state', '>', 0)->where('validated', "1");
        $arrayTerm = explode(' ', $term);
        foreach ($arrayTerm as $word) {
            if (strlen($word) >= 3) {
                $offerors->where('tags', 'LIKE', "%$word%");
            }
        }
        $offPag = $offerors->paginate(30);

        $itemsTransformed = $offPag
            ->getCollection()
            ->map(function ($item) {
                return [
                    'id' => $item->id,
                    'user' => [
                        'name' => $item->user->name,
                        'city' => $item->city->name,
                        'height' => $item->height . ' cm',
                        'talents' => substr($item->aptitudes, 0, 20) . ' ...'
                    ],
                    'avatar' => $item->user->getAvatar(),
                    'cover' => $item->albums->first()->getCover(),
                    'slug' => route('offerors.show', $item)
                ];
            });

        $itemsTransformedAndPaginated = new LengthAwarePaginator(
            $itemsTransformed,
            $offPag->total(),
            $offPag->perPage(),
            $offPag->currentPage(), [
                'path' => \Request::url(),
                'query' => [
                    'page' => $offPag->currentPage()
                ]
            ]
        );
        return $itemsTransformedAndPaginated;

    }
}
