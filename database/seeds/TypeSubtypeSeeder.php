<?php

use Illuminate\Database\Seeder;
use \App\Seo;
use \App\Type;

class TypeSubtypeSeeder extends Seeder
{
    public function run()
    {

        $types = [
            ['icon_id' => null, 'title' => 'News', 'visible' => false, 'position' => 10], //1
            ['icon_id' => null, 'title' => 'Music', 'visible' => true, 'position' => 10], //1
            ['icon_id' => null, 'title' => 'Culture', 'visible' => true, 'position' => 20], //2
            ['icon_id' => null, 'title' => 'Fashion', 'visible' => true, 'position' => 30], //3
            ['icon_id' => null, 'title' => 'Food', 'visible' => true, 'position' => 40], //4
            ['icon_id' => null, 'title' => 'Sport', 'visible' => true, 'position' => 50], //6
        ];

        foreach ($types as $key => $type) {
            $t = Type::create([
                'title' => $type['title'],
                'visible' => $type['visible'],
                'position' => $type['position'],
            ]);

            Seo::create([
                'title' => $type['title'],
                'slug' => $type['title'],
                'seoble_id' => $t->id,
                'seoble_type' => 'App\Type',
            ]);
        }
    }
}
