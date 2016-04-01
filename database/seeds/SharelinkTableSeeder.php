<?php

use Illuminate\Database\Seeder;

class SharelinkTableSeeder extends Seeder
{
    public function run()
    {
        $usershares =
            [
            ['user_id' => 1, 'url' => 'https://www.facebook.com/sessie', 'icon_id' => 1, 'u_id' => null],
            ['user_id' => 1, 'url' => 'https://plus.google.com/u/0/sessie', 'icon_id' => 3, 'u_id' => null],
            ['user_id' => 1, 'url' => 'https://instagram.com/sessie/', 'icon_id' => 4, 'u_id' => null],
            ['user_id' => 1, 'url' => 'https://play.spotify.com/user/sessie', 'icon_id' => 8, 'u_id' => null],
            ['user_id' => 1, 'url' => 'https://soundcloud.com/sessie', 'icon_id' => 7, 'u_id' => null],
            ['user_id' => 1, 'url' => 'https://twitter.com/sessie', 'icon_id' => 9, 'u_id' => null],

            ['user_id' => 2, 'url' => 'https://www.facebook.com/joe.diensi', 'icon_id' => 1, 'u_id' => null],
            ['user_id' => 2, 'url' => 'https://www.instagram.com/joembongo/', 'icon_id' => 4, 'u_id' => null],
            ['user_id' => 2, 'url' => 'https://twitter.com/JoeMbongo', 'icon_id' => 9, 'u_id' => null],

            ['user_id' => 3, 'url' => 'https://www.facebook.com/jesse.manu.7', 'icon_id' => 1, 'u_id' => null],
            ['user_id' => 3, 'url' => 'https://www.instagram.com/manujesse/', 'icon_id' => 4, 'u_id' => null],

            ['user_id' => 4, 'url' => 'https://www.facebook.com/vdhjonas91', 'icon_id' => 1, 'u_id' => 10208762308476183],
            ['user_id' => 4, 'url' => 'https://plus.google.com/u/0/113736815749779639543', 'icon_id' => 3, 'u_id' => null],
            ['user_id' => 4, 'url' => 'https://instagram.com/vdhjonas91/', 'icon_id' => 4, 'u_id' => null],
            ['user_id' => 4, 'url' => 'https://github.com/jonasvanderhaegen', 'icon_id' => 2, 'u_id' => 7755555],
            ['user_id' => 4, 'url' => 'https://be.linkedin.com/in/jonas-vanderhaegen-974785b7', 'icon_id' => 5, 'u_id' => null],
            ['user_id' => 4, 'url' => 'https://play.spotify.com/user/1186092526', 'icon_id' => 8, 'u_id' => null],
            ['user_id' => 4, 'url' => 'https://soundcloud.com/vdhjonas', 'icon_id' => 7, 'u_id' => null],
            ['user_id' => 4, 'url' => 'https://twitter.com/vdhJonas', 'icon_id' => 9, 'u_id' => 175719629],
            ['user_id' => 4, 'url' => 'http://jonasvanderhaegen.be/', 'icon_id' => 11, 'u_id' => null],
        ];

        foreach ($usershares as $key => $share) {
            $s = \App\Sharelink::create(['url' => $share['url'], 'icon_id' => $share['icon_id'], 'user_id' => $share['u_id']]);

            \App\User::find($share['user_id'])->sharelinks()->attach($s->id);
        }
    }
}
