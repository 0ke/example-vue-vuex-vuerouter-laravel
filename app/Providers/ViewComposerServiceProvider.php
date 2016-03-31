<?php

namespace App\Providers;

use App\Type;
use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->composeShares();
        $this->breakingnews();
        //$this->composeInbox();
        $this->composeMenuLinks();
        $this->composeDefaultPlaylist();
    }

    public function register()
    {
    }

    public function breakingnews()
    {
        view()->composer('master.partials.breakingnews', function ($view) {
            $posts = Type::where('title', '=', 'news')->first()->subposts()->orderBy('created_at', 'desc')->take(6)->get();
            $view->withPosts($posts);
        });
    }

    public function composeMenuLinks()
    {
        view()->composer('master.mainpartials.menu', function ($view) {
            $types = Type::with('subtypes');
            $view->withTypes($types->where('visible', true)->orderBy('position', 'asc')->get());
            $view->withEventlinks($types->get());
        });
    }

    public function composeDefaultPlaylist()
    {
        view()->composer('master.partials.tplayer.playlist', function ($view) {
            $tracks = \App\Track::with('seo', 'artists')->get();
            $view->withTracks($tracks);
        });
    }

    public function composeShares()
    {
        view()->composer(['master.mainpartials.menu', 'master.mainpartials.footer'], function ($view) {
            $user = \App\User::first();
            $posts = \App\Post::take(5)->get();
            $view->withPosts($posts);
            $view->withSharelinks($user->sharelinks->toArray());
            $view->withUser($user->toArray());
            $view->withTypes(Type::all());
        });
    }

    /*
public function composeInbox()
{
view()->composer('vendor.parts.messages', function ($view) {
$view->withCount(Cmessage::where('read', '=', false)->count());
$view->withMessages(Cmessage::where('read', '=', false)->orderBy('created_at', 'desc')->take(5)->get(['id', 'name', 'subject', 'created_at']));
});
}
 */
}
