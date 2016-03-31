<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\storePostRequest;
use App\Http\Requests\updatePostRequest;
use App\Repositories\PostRepository as Repository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(Repository $repo)
    {
        $this->repo = $repo;
        $this->middleware('auth', ['except' => ['show']]);
        $this->middleware('auth.role:manager', ['except' => ['show']]);
    }

    public function index($p1 = null, $p2 = null)
    {
        $posts = $this->repo->orderBy('post', 'created_at', 'asc')->simplepaginate(9);
        $types = $this->repo->orderBy('type', 'position', 'asc')->get();

        if (request()->ajax()) {
            return response()->json([
                'locale' => session()->get('locale', 'nl'),
                'url' => request()->url(),
                'title' => ' | De Sessie',
                'type' => 'pageload',
                'path' => request()->path(),
                'view' => view('pages.posts.index', compact('posts', 'types'))->render(),
            ]);
        }
        return view('pages.posts.index', compact('posts', 'types'));
    }

    public function create()
    {
        $types = $this->repo->getAllFrom('type')->all();
        $storystreams = $this->repo->getAllFrom('storystream')->all();
        if (request()->ajax()) {
            return response()->json([
                'locale' => session()->get('locale', 'nl'),
                'url' => request()->url(),
                'title' => 'Post Create | De Sessie',
                'type' => 'pageload',
                'path' => request()->path(),
                'view' => view('pages.posts.create', compact('types', 'storystreams'))->render(),
            ]);
        }
        return view('pages.posts.create', compact('types', 'storystreams'));
    }

    public function store(storePostRequest $request)
    {
        $post = $this->repo->findById($this->repo->storePost($request), 'post');

        if ($request->ajax()) {
            return response()->json(
                [
                    'status' => true,
                    'form' => 'storePost',
                ]
            );
        }
        return redirect()->route('post.show', response()->returnParameters($post, 'post'));
    }

    public function show($slug)
    {
        $post = $this->repo->findById($this->repo->findSeoble($slug, 'App\Post')->id, 'post', ['type', 'subtype', 'tags', 'users']);

        $previous = $this->repo->orderBy('post', 'created_at', 'desc')->whereIn('subtype_id', [$post->type_id])->where('id', '<', $post->id)->first();
        $next = $this->repo->orderBy('post', 'created_at', 'asc')->whereIn('subtype_id', [$post->type_id])->where('id', '>', $post->id)->first();

        if (request()->ajax()) {
            return response()->json([
                'post' => $post,
                'previous' => $previous,
                'next' => $next,
                'related' => null,
            ]);
        }
        return redirect('/#!/article/' . $slug);
    }

    public function edit($id)
    {
        $types = $this->repo->getAllFrom('type')->all();
        $storystreams = $this->repo->getAllFrom('storystream')->all();
        $post = $this->repo->findById($id, 'post');
        if (request()->ajax()) {
            return response()->json([
                'locale' => session()->get('locale', 'nl'),
                'url' => request()->url(),
                'title' => 'Post Create | De Sessie',
                'type' => 'pageload',
                'path' => request()->path(),
                'view' => view('pages.posts.edit', compact('post', 'types', 'storystreams'))->render(),
            ]);
        }
        return view('pages.posts.edit', compact('post', 'types', 'storystreams'));
    }

    public function update(updatePostRequest $request, $id)
    {
        $post = $this->repo->findById($id, 'post');
        $this->repo->updatePost($request, $post);

        if ($request->ajax()) {
            return response()->json(
                [
                    'status' => true,
                    'form' => 'updatePost',
                    'post' => $post,
                    'request' => $request->all(),
                ]
            );
        }

        return redirect()->route('post.show', response()->returnParameters($post, 'post'));

    }

    public function destroy($id)
    {
        $post = $this->repo->deletePost($id);
        return response()->json(['title' => 'Deleted!', 'text' => 'This post is now archived.']);
    }

    public function uploadImage(Request $request)
    {
        return response()->json(
            $this->repo->imageputter->uploadBodyImage($request->input('id'), $request->file('img'))
        );
    }
}
