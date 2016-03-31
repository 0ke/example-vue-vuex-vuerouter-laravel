<?php

namespace App\Providers;

use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{

    public function boot(ResponseFactory $factory)
    {
        // MUSIC
        $factory->macro('artists', function ($artists) use ($factory) {

            if (count($artists) == 1) {
                return $artists->first()->title;
            }

            $string = '';
            foreach ($artists as $key => $artist) {
                $between = ($key == 0) ? null : ' x ';
                $string = str_finish($string, $between . $artist->title);
            }

            return $string;
        });

        $factory->macro('determineCover', function ($track) use ($factory) {

            $id = $track->id;
            $rootpath = 'images/music/';
            if ($cover = $track->cover) {
                if (File::exists($path = $rootpath . $cover . '.jpg')) {
                    return $path;
                }
            }

            if (File::exists($path = $rootpath . 'tracks/' . $id . '.jpg')) {
                return $path;

            } elseif (count($albums = $track->albums)) {
                if (File::exists($path = $rootpath . 'albums/' . $albums->first()->id . '.jpg')) {
                    return $path;
                }

            } elseif (File::exists($path = $rootpath . 'artists/' . $track->artists->first()->id . '.jpg')) {
                return $path;

            } else {
                return 'images/tpa_logo.jpg';

            }
        });

        $factory->macro('songsInPlaylist', function () use ($factory) {
            return session()->get('playSession', 0);
        });

        // Return data in the right language
        $factory->macro('returnLang', function ($model, $attribute, $default = false, $language = null, $typesubtype = false) use ($factory) {
            if ($typesubtype) {
                $model = $model->subtype_id ? $model->subtype : $model->type;
            }
            $seo = $model->seo->first()->toArray();

            if ($default) {
                return $seo[$attribute];
            } elseif (!$language) {
                $language = session()->get('locale', 'nl');
            }
            switch ($attribute) {
                case 'inclusions':
                case 'body':
                case 'pros':
                case 'cons':
                case 'about':
                    return $model->toArray()[$attribute . '_' . $language];
                    break;
            }

            return $seo[$attribute . '_' . $language];
        });

        // Return array for named route
        $factory->macro('returnParameters', function ($thismodel, $model, $type = false, $subtype = false, $lang = null) use ($factory) {
            // switch ($model) {
            //     case 'post':
            //         if (!$type) {
            //             $type = $this->returnLang($thismodel->subtype->type, 'slug', true);
            //         } else {
            //             $type = $this->returnLang($type, 'slug', true);
            //         }
            //         if (!$subtype) {
            //             $subtype = $this->returnLang($thismodel->subtype, 'slug', true);
            //         } else {
            //             $subtype = $this->returnLang($subtype, 'slug', true);
            //         }
            //         return [$type, $subtype, $this->returnLang($thismodel, 'slug')];
            //         break;
            // }
            return ['article', str_slug($thismodel->created_at->format('d M Y')), $this->returnLang($thismodel, 'slug', null, $lang)];
        });

        $factory->macro('getLoader', function () use ($factory) {
            return (session()->get('scheme')) ? 'dark' : 'light';
        });
    }

    public function register()
    {
        //
    }

}
