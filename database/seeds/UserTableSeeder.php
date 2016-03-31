<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'first_name' => 'De',
                'last_name' => 'Sessie',
                'username' => 'De Sessie',
                'password' => 'password',
                'email' => 'desessieantwerpen@gmail.com',
                'phone' => '+32(0)486 69 01 90',
                'description_nl' => 'lorum ipsum',
                'description_en' => 'lorum ipsum',
                'roles' => [2],
            ],

            [
                'first_name' => 'Joe',
                'last_name' => 'Diensi',
                'username' => 'cowboyjoe',
                'password' => 'password',
                'email' => 'joediensi@gmail.com',
                'phone' => '+32(0)486 69 01 90',
                'description_nl' => 'lorum ipsum',
                'description_en' => 'lorum ipsum',
                'roles' => [1],
            ],

            [
                'first_name' => 'Jesse',
                'last_name' => 'Manu',
                'username' => 'jessem',
                'password' => 'password',
                'email' => 'jessemanu@gmail.com',
                'phone' => '+32(0)497 33 27 88',
                'description_nl' => 'Lorum ipsum',
                'description_en' => 'lorum ipsum',
                'roles' => [2],
            ],

            [
                'first_name' => 'Jonas',
                'last_name' => 'Vanderhaegen',
                'username' => 'vdhjonas',
                'password' => env('USER_PASSWORD'),
                'email' => 'jonasvanderhaegen@hotmail.com',
                'phone' => '+32(0)0494 54 97 32',
                'description_nl' => 'Web designer van dienst',
                'description_en' => 'lorum ipsum',
                'roles' => [2, 3, 6],
            ],

        ];

        foreach ($users as $user) {
            $u = \App\User::create([
                'username' => $user['username'],
                'first_name' => $user['first_name'],
                'last_name' => $user['last_name'],
                'password' => bcrypt($user['password']),
                'pattern' => Crypt::encrypt(4321),
                'email' => $user['email'],
                'phone' => $user['phone'],
                'about_nl' => "",
                'about_en' => "",
            ]);

            App\Seo::create([
                'title' => $user['first_name'] . ' ' . $user['last_name'],
                'slug' => str_slug($user['first_name'] . ' ' . $user['last_name']),
                'description_nl' => $user['description_nl'],
                'description_en' => $user['description_en'],
                'seoble_type' => 'App\User',
                'seoble_id' => $u->id,
            ]);

            $u->roles()->attach($user['roles']);
        }

        //factory('App\User', 5)->create();
    }
}
