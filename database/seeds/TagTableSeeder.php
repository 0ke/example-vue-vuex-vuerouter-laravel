<?php

use Illuminate\Database\Seeder;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = ['interview', 'serie', 'movie', 'disaster', 'nsfw', 'hipster'];

        foreach ($tags as $tag) {
            $t = \App\Tag::create(['title' => $tag]);

            \App\Seo::create(['title' => $tag, 'slug' => str_slug($tag), 'seoble_id' => $t->id, 'seoble_type' => 'App\Tag']);
        }
    }
}
