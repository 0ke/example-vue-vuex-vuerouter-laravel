<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\SharelinkRepository as Repository;
use Illuminate\Http\Request;

class SharelinkController extends Controller
{
    public function __construct(Repository $repository)
    {
        $this->repo = $repository;
        $this->middleware('auth');
        $this->middleware('auth.role:manager');
    }

    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
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
