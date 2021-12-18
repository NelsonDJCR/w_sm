<?php

namespace App;


use Illuminate\Support\Facades\DB;

class Stage
{

    public static function restoreCart()
    {
        $user = auth()->user();
        $identifier = $user->id;
        \Cart::restore($identifier);
    }

    public static function storeCart()
    {
        $user = auth()->user();
        if ($user) {

            $identifier = $user->id;

            $content = \Cart::content();

            if (DB::table('shoppingcart')->where('identifier', $identifier)->exists()) {

                DB::table('shoppingcart')->update([
                    'instance' => \Cart::currentInstance(),
                    'content' => serialize($content),
                    'identifier' => $identifier,
                ]);

            } else {

                DB::table('shoppingcart')->insert([
                    'identifier' => $identifier,
                    'instance' => \Cart::currentInstance(),
                    'content' => serialize($content)
                ]);

            }

        }

    }

}
