<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\RoleRepository as Repository;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct(Repository $repository)
    {
        $this->repo = $repository;
        $this->middleware('auth');
        $this->middleware('auth.role:manager');
    }

    public function index()
    {
        return view('pages.roles.index');
    }

    public function create()
    {
        return view('pages.roles.create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('pages.roles.show');
    }

    public function edit($id)
    {
        return view('pages.roles.edit');
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
