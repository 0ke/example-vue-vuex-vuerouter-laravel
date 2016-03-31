<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository as Repository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(Repository $repo)
    {
        $this->repo = $repo;
        $this->middleware('auth', ['only' => ['update', 'edit', 'destroy']]);
    }

    public function index()
    {
        $users = $this->repo->orderBy('user', 'id', 'asc');
        $top3 = $users->whereBetween('id', array(2, 4))->get();

        if (\Request::ajax()) {
            return response()->json([
                'locale' => session()->get('locale', 'nl'),
                'url' => \Request::url(),
                'title' => 'Team | De Sessie',
                'type' => 'pageload',
                'path' => \Request::path(),
                'view' => view('pages.users.index', compact('users', 'top3'))->render(),
            ]);
        }

        return view('pages.users.index', compact('users', 'top3'));
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(Request $request)
    {
        $result = $this->repo->storeUser($request);
        if ($request->ajax()) {
            return response()->json(
                [
                    'status' => true,
                    'form' => 'storeUser',
                ]
            );
        }
        return redirect()->route('user.show', response()->returnLang($user, 'slug', true));
    }

    public function show($slug)
    {
        $user = $this->repo->findSeoble($slug);

        if (\Request::ajax()) {
            return response()->json([
                'locale' => session()->get('locale', 'nl'),
                'url' => \Request::url(),
                'title' => response()->returnLang($user, 'title', true) . ' | Team | De Sessie',
                'type' => 'pageload',
                'path' => \Request::path(),
                'view' => view('pages.users.show', compact('user'))->render(),
            ]);
        }
        return view('pages.users.show', compact('user'));
    }

    public function edit($id)
    {
        if (\Request::ajax()) {
            return response()->json([
                'locale' => session()->get('locale', 'nl'),
                'url' => \Request::url(),
                'title' => '| De Sessie',
                'type' => 'pageload',
                'path' => \Request::path(),
                'view' => view('pages.users.edit', compact('user'))->render(),
            ]);
        }
        return view('pages.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $result = $this->repo->updateUser($id, $request);
        if ($request->ajax()) {
            return response()->json(
                [
                    'status' => true,
                    'form' => 'updateUser',
                ]
            );
        }
        return redirect()->route('user.show', response()->returnLang($user, 'slug', true));
    }

    public function destroy($id)
    {
        //
    }
}
