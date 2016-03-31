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
        if (request()->ajax()) {
            return response()->json([
                'locale' => session()->get('locale', 'nl'),
                'sliderposts' => $this->repo->orderBy('post', 'created_at', 'desc', ['type', 'subtype'])->take(6)->get(['id', 'type_id', 'subtype_id']),
                'rightfromsliderposts' => $this->repo->orderBy('post', 'created_at', 'desc')->take(4)->get(['posts.id']),
                'section2' => ['type' => $this->repo->findSeoble('culture'), 'posts' => $this->repo->findSeoble('culture')->subposts()->with('type', 'subtype')->whereConcept(0)->take(3)->get(['posts.id'])],
                'section3' => ['type' => $this->repo->findSeoble('fashion'), 'posts' => $this->repo->findSeoble('fashion')->subposts()->whereConcept(0)->take(3)->get(['posts.id'])],
                'sectiontabs' => [
                    'videonews' => [
                        'featured' => $this->repo->findSeoble('news')->subposts()->where('videourl', '!=', '')->whereConcept(0)->first(),
                        'other' => $this->repo->findSeoble('news')->subposts()->where('videourl', '!=', '')->whereConcept(0)->take(9)->skip(1)->get(['posts.id']),
                    ],
                    'moviereviews' => [
                        'featured' => $this->repo->findSeoble('media')->posts()->whereConcept(0)->first(),
                        'other' => $this->repo->findSeoble('media')->posts()->whereConcept(0)->take(8)->skip(1)->get(['posts.id']),
                    ],
                    'music' => [
                        'featured' => $this->repo->findSeoble('music')->posts()->whereConcept(0)->first(),
                        'other' => $this->repo->findSeoble('music')->posts()->whereConcept(0)->take(6)->get(['posts.id']),
                    ],
                    'opinionpolls' => [
                        'featured' => $this->repo->findSeoble('culture')->subposts()->whereConcept(0)->first(),
                        'other' => $this->repo->findSeoble('culture')->subposts()->whereConcept(0)->take(5)->get(['posts.id']),
                    ],
                ],
                'section5' => ['type' => $this->repo->findSeoble('news'), 'posts' => $this->repo->findSeoble('news')->subposts()->whereConcept(0)->take(8)->get(['posts.id'])],
            ]);
        }
        return redirect('/');
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
