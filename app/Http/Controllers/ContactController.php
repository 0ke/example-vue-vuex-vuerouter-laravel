<?php

namespace App\Http\Controllers;

use App\Helpers\Mailers\UserMailer as Mailer;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeContactmessageRequest;
use App\Http\Requests\updateContactmessageRequest;
use App\Repositories\ContactRepository as Repository;

class ContactController extends Controller
{
    public function __construct(Mailer $mailer, Repository $repository)
    {
        $this->repo = $repository;
        $this->mailer = $mailer;
        $this->middleware('auth', ['except' => ['create', 'store']]);
    }

    public function index()
    {
        return view('pages.contact.index');
    }

    public function create()
    {
        if (request()->ajax()) {
            return response()->json([
                'locale' => session()->get('locale', 'nl'),
                'url' => request()->url(),
                'title' => 'Contact | De Sessie',
                'path' => request()->path(),
                'type' => 'pageload',
                'view' => view('pages.contact.create')->render(),
            ]);
        }
        return view('pages.contact.create');
    }

    public function store(storeContactmessageRequest $request)
    {
        $this->repo->storeMessage($request->except('_token'));

        if ($request->ajax()) {
            return response()->json(
                [
                    'status' => true,
                    'form' => 'contact',
                    'contact' => 'visitor',
                    'title' => trans('contact.responseTitle'),
                    'text' => trans('contact.responseText'),
                ]
            );
        }
        return redirect()->route('main.home')
            ->withSwal(['type' => 'success', 'title' => 'Bedankt voor uw bericht', 'text' => 'Bericht is verzonden naar jonasvanderhaegen@hotmail.com.']);
    }

    public function show($id)
    {
        if (request()->ajax()) {
            return response()->json([
                'locale' => session()->get('locale', 'nl'),
                'url' => request()->url(),
                'title' => 'Contact',
                'path' => request()->path(),
                'type' => 'pageload',
                'view' => view('pages.contact.show')->render(),
            ]);
        }
        return view('pages.contact.show');
    }

    public function edit($id)
    {
        if (request()->ajax()) {
            return response()->json([
                'locale' => session()->get('locale', 'nl'),
                'url' => request()->url(),
                'title' => 'Contact',
                'path' => request()->path(),
                'type' => 'pageload',
                'view' => view('pages.contact.edit')->render(),
            ]);
        }
        return view('pages.contact.edit');
    }

    public function update(updateContactmessageRequest $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
