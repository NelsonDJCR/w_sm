<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $rawLocale = $request->session()->get('locale');
        if (\Auth::check()) {
            $userLang = \Auth::user()->language;
            if (!empty($userLang)) {
                $rawLocale = $userLang;
            }
            $currency = \Auth::user()->preferred_currency;
            if (!empty($currency)) {
                if (in_array($currency, Config::get('app.currencies'))) {
                    session(['currency' => $currency]);
                } else session(['currency' => Config::get('app.currency')]);
            } else {
                session(['currency' => Config::get('app.currency')]);
            }
        }
        if (in_array($rawLocale, Config::get('app.locales'))) {
            $locale = $rawLocale;
        } else $locale = Config::get('app.locale');
        App::setLocale($locale);
        return $next($request);
    }
}
