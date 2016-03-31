<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\TypeSubtypeRepository as Repository;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function __construct(Repository $repository)
    {
        $this->repo = $repository;
        $this->middleware('auth', ['except' => ['index']]);
        $this->middleware('auth.role:manager', ['except' => ['index']]);
    }

    public function index($typeslug)
    {
        $type = $this->repo->findSeoble($typeslug, 'App\Type');
        if ($type->subtypes->count()) {
            $posts = $type->subposts()->with('type', 'subtype')->orderBy('created_at', 'desc')->whereConcept(0)->get(['posts.id', 'created_at', 'posts.type_id', 'posts.subtype_id']);
        } else {
            $posts = $type->posts()->with('type', 'subtype')->orderBy('created_at', 'desc')->whereConcept(0)->get(['posts.id', 'created_at', 'posts.type_id', 'posts.subtype_id']);
        }

        if (request()->ajax()) {
            return response()->json([
                'posts' => $posts,
            ]);
        }
        return redirect('/#!/' . $typeslug);
    }

    public function create()
    {
        return view('pages.types.create');
    }

    public function store(Request $request)
    {
        return redirect()->route('post.type.index', $this->repo->storeType($request));
    }

    public function show($id)
    {
        return view('pages.types.show');
    }

    public function edit($id)
    {
        $type = $this->repo->findById($id, 'type');
        return view('pages.types.edit', compact('type'));
    }

    public function update(Request $request, $id)
    {
        return redirect()->route('post.type.index', $this->repo->updateType($request, $id));
    }

    public function destroy($id)
    {
        //
    }
}
