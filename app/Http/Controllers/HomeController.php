<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Resena;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $urlLanguage = request()->segment(1);
        $currentLanguage = in_array($urlLanguage, config('app.available_locales')) ? $urlLanguage : config('app.fallback_locale');
        app()->setLocale($currentLanguage);

        return view('home');
    }

    public function notfound()
    {
        $urlLanguage = request()->segment(1);

        $currentLanguage = in_array($urlLanguage, config('app.available_locales')) ? $urlLanguage : config('app.fallback_locale');
        app()->setLocale($currentLanguage);

        return view('404');
    }
    
}