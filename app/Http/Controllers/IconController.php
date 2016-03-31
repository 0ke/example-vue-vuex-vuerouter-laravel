<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\IconRepository as Repository;
use Illuminate\Http\Request;

class IconController extends Controller
{
    public function __construct(Repository $repository)
    {
        $this->repo = $repository;
        $this->middleware('auth', ['except' => ['index', 'show']]);
        $this->middleware('auth.role:manager', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        return view('pages.icons.index');
    }

    public function create()
    {
        return view('pages.icons.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('pages.icons.show');
    }

    public function edit($id)
    {
        return view('pages.icons.edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
