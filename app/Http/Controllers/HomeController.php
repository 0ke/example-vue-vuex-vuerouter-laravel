<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Repository;

class HomeController extends Controller
{

    public function __construct(Repository $repository)
    {
        $this->repo = $repository;
        $this->middleware('auth', ['only' => ['dashboard']]);
        $this->middleware('auth.role:manager', ['only' => ['dashboard']]);
    }
    public function app()
    {
        return view('pages.main.app');
    }
    public function changeLocale($locale)
    {
        session()->put('locale', $locale);
        return back();
    }
    public function switchLanguage()
    {
        return response()->json(
            [
                'type' => 'swithLanguage',
                'view' => view('master.partials.top-locale')->render(),
            ]
        );
    }
    public function changeScheme($bool)
    {
        $bool = ($bool === 'true');
        session()->put('scheme', $bool);

        return response()->json(
            [
                'type' => 'switchScheme',
                'scheme' => $bool,
                $bool,
            ]
        );
    }
    public function home()
    {
        return view('welcome');
    }

    public function about()
    {
        if (request()->ajax()) {
            return response()->json([
                'locale' => session()->get('locale', 'nl'),
                'url' => request()->url(),
                'title' => 'About',
                'path' => request()->path(),
                'type' => 'pageload',
                'view' => view('pages.main.about')->render(),
            ]);
        }
        return view('pages.main.about');
    }

    public function dashboard()
    {
        return view('pages.users.dashboard');
    }

    public function termsofuse()
    {
        return view('pages.main.termsofuse');
    }

    public function privacypolicy()
    {
        return view('pages.main.privacypolicy');
    }

}
