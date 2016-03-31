<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class storePostRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $locale = session()->get('locale', 'nl');
        return [
            'title_' . $locale => 'required|unique:seo,title_' . $locale,
            'description_' . $locale => 'required|unique:seo,title_' . $locale,
            'category' => 'required',
            'thumb' => 'required|image',
            'galerij' => '',
            'embed' => '',
            'video-url' => 'url|active_url',
        ];
    }
}
