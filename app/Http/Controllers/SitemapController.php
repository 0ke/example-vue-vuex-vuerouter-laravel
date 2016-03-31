<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Post;
use App\Role;
use App\Type;
use App\User;
use Sitemap;

class SitemapController extends Controller
{
    public function index()
    {
        Sitemap::addTag(route('main.home'), null, null, null);
        Sitemap::addTag(route('main.about'), null, null, null);
        Sitemap::addTag(route('tou'), null, null, null);
        Sitemap::addTag(route('pp'), null, null, null);
        Sitemap::addTag(route('contact.store'), null, null, null);

        Sitemap::addTag(route('team.index'), null, null, null);

        foreach (User::all()->all() as $user) {
            Sitemap::addTag(route('team.show', response()->returnLang($user, 'slug', true)), null, null, null);
        }

        foreach (Role::all()->all() as $role) {
            Sitemap::addTag(route('jobs.show', response()->returnLang($role, 'slug', true)), $role->updated_at, 'monthly', '0.3');
        }

        foreach (Type::all()->all() as $type) {
            Sitemap::addTag(route('post.type.index', response()->returnLang($type, 'slug', true)), null, null, '0.5');
            foreach ($type->subtypes as $subtype) {
                Sitemap::addTag(route('post.subtype.index', [response()->returnLang($type, 'slug', true), response()->returnLang($subtype, 'slug', true)]), null, null, '0.5');
            }
        }

        foreach (Post::all()->all() as $post) {
            Sitemap::addTag(new \Watson\Sitemap\Tags\MultilingualTag(
                route('post.show', response()->returnParameters($post, 'post')),
                $post->updated_at,
                'daily',
                '0.9',
                [
                    'nl' => route('post.show', ['article', str_slug($post->created_at->format('d M Y')), response()->returnLang($post, 'slug', false, 'nl')]),
                    'en' => route('post.show', ['article', str_slug($post->created_at->format('d M Y')), response()->returnLang($post, 'slug', false, 'en')]),
                ]
            ));

        }

        return Sitemap::render();
    }

    public function posts()
    {
        $posts = Post::all();

        foreach ($posts as $post) {
            Sitemap::addTag(route('post.show', ['lol', 'lol', 'lol']), $post->updated_at, 'daily', '0.8');
        }

        return Sitemap::render();
    }

}
