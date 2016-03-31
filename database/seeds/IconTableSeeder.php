<?php

use Illuminate\Database\Seeder;

class IconTableSeeder extends Seeder
{
    public function run()
    {
        $icons = [
            [ //1
                'classname' => 'facebook',
                'iconname' => 'facebook',
                'type' => 'social',
                'website' => 'Facebook',
            ],
            [ //2
                'classname' => 'twitter',
                'iconname' => 'twitter',
                'type' => 'social',
                'website' => 'Twitter',
            ],
            [ //3
                'classname' => 'gplus',
                'iconname' => 'gplus',
                'type' => 'social',
                'website' => 'Google+',
            ],
            [ //4
                'classname' => 'spotify',
                'iconname' => 'spotify',
                'type' => 'social',
                'website' => 'Spotify',
            ],
            [ //5
                'classname' => 'linkedin',
                'iconname' => 'linkedin',
                'type' => 'social',
                'website' => 'LinkedIn',
            ],
            [ //6
                'classname' => 'skype',
                'iconname' => 'skype',
                'type' => 'social',
                'website' => 'Skype',
            ],
            [ //7
                'classname' => 'youtube',
                'iconname' => 'youtube',
                'type' => 'social',
                'website' => 'Youtube',
            ],
            [ //8
                'classname' => 'vimeo',
                'iconname' => 'vimeo',
                'type' => 'social',
                'website' => 'Vimeo',
            ],
            [ //9
                'classname' => 'soundcloud',
                'iconname' => 'soundcloud',
                'type' => 'social',
                'website' => 'Soundcloud',
            ],
            [ //10
                'classname' => 'github',
                'iconname' => 'github-circled',
                'type' => 'social',
                'website' => 'Github',
            ],
            [ //11
                'classname' => 'instagram',
                'iconname' => 'instagram',
                'type' => 'social',
                'website' => 'Instagram',
            ],
            [ //12
                'classname' => 'email',
                'iconname' => 'line-link',
                'type' => 'social',
                'website' => 'Website',
            ],
        ];

        $icons = array_values(array_sort($icons, function ($value) {
            return $value['website'];
        }));

        foreach ($icons as $icon) {
            \App\Icon::create($icon);
        }
    }
}
