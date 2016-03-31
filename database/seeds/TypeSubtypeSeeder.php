<?php

use Illuminate\Database\Seeder;
use \App\Seo;
use \App\Subtype;
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

        $subtypes = [
            ['type_id' => 1, 'title' => 'Belgium', 'visible' => true, 'position' => 10], // 1
            ['type_id' => 1, 'title' => 'World', 'visible' => true, 'position' => 20], // 1

            ['type_id' => 3, 'title' => 'Art', 'visible' => true, 'position' => 10], // 2
            ['type_id' => 3, 'title' => 'Literature', 'visible' => true, 'position' => 20], // 2
            ['type_id' => 3, 'title' => 'Media', 'visible' => true, 'position' => 30], // 2
            ['type_id' => 3, 'title' => 'Religion', 'visible' => true, 'position' => 50], // 2

            ['type_id' => 4, 'title' => 'Sneakers', 'visible' => true, 'position' => 10], // 3
            ['type_id' => 4, 'title' => 'Clothing', 'visible' => true, 'position' => 20], // 3

            ['type_id' => 5, 'title' => 'Mama f*cked up the kitchen', 'visible' => true, 'position' => 10], // 4
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

        foreach ($subtypes as $key => $subtype) {
            $s = Subtype::create([
                'title' => $subtype['title'],
                'type_id' => $subtype['type_id'],
                'icon_id' => null,
                'visible' => $subtype['visible'],
                'position' => $subtype['position'],
            ]);

            Seo::create([
                'title' => $subtype['title'],
                'slug' => $subtype['title'],
                'seoble_id' => $s->id,
                'seoble_type' => 'App\Subtype',
            ]);
        }

    }
}
