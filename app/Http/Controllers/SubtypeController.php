<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\TypeSubtypeRepository as Repository;
use Illuminate\Http\Request;

class SubtypeController extends Controller
{
    public function __construct(Repository $repository)
    {
        $this->repo = $repository;
        $this->middleware('auth', ['except' => ['index']]);
        $this->middleware('auth.role:manager', ['except' => ['index']]);
    }

    public function index($typeslug, $subtypeslug)
    {
        $map = 'posts';

        $subtype = $this->repo->findSeoble($subtypeslug, 'App\Subtype');
        ($subtype == 'events') ? $map = 'events' : null;
        $posts = $subtype->posts()->with('type', 'subtype')->orderBy('created_at', 'desc')->get();

        if (request()->ajax()) {
            return response()->json([
                'posts' => $posts,
            ]);
        }
        return redirect('/#!/' . $typeslug . '/' . $subtypeslug);
    }

    public function create()
    {
        $types = $this->repo->type->all()->lists('title', 'id');
        return view('pages.subtypes.create', compact('types'));
    }

    public function store(Request $request)
    {
        return redirect()->route('post.subtype.index', $this->repo->storeSubtype($request));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $subtype = $this->repo->findById($id, 'subtype');
        $types = $this->repo->type->all()->lists('title', 'id');
        return view('pages.subtypes.edit', compact('types', 'subtype'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('post.subtype.index', $this->repo->updateSubtype($request, $id));
    }

    public function destroy($id)
    {
        //
    }
}
