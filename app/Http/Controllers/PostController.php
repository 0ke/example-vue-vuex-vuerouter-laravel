<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepository as Repository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct(Repository $repo)
    {
        $this->repo = $repo;
    }

    public function show($slug)
    {
        $post = $this->repo->findById($this->repo->findSeoble($slug, 'App\Post')->id, 'post', ['type', 'tags', 'users']);

        if (request()->ajax()) {
            return response()->json([
                'post' => $post,
            ]);
        }

        return redirect('/#!/article/' . $slug);
    }

}
