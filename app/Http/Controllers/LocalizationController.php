<?php

namespace App\Http\Controllers;



class LocalizationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($locale)
    {
        // if(!is_array($locale,config('localization.locales'))){
        //     abort(400);
        // }
        if (! in_array($locale, ['en', 'ar'])) {
            abort(400);
        }
        session(['Localization'=>$locale]);
        return redirect()->back();
    }
}
