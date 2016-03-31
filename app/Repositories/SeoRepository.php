<?php
namespace App\Repositories;

class SeoRepository extends Repository
{

    public function storeSeo($request, $id, $string)
    {
        $seo = $this->seo->create($request->all());
        $ifRegister = $request->has('first_name') && $request->has('last_name');

        if ($request->has('title_nl')) {
            $seo->update(
                [
                    'slug_nl' => $request->input('title_nl'),
                    'title_en' => $request->input('title_nl'),
                    'slug_en' => $request->input('title_nl'),
                    'description_en' => $request->input('description_nl'),
                ]
            );
        } elseif ($request->has('title_en')) {
            $seo->update(
                [
                    'slug_en' => $request->input('title_en'),
                    'title_nl' => $request->input('title_en'),
                    'slug_nl' => $request->input('title_en'),
                    'description_nl' => $request->input('description_en'),
                ]
            );
        } elseif ($request->has('title') || $ifRegister) {
            $title = $ifRegister ? $request->input('first_name') . ' ' . $request->input('last_name') : $request->input('title');
            $seo->update(
                [
                    'title' => $title,
                    'slug' => $title,
                ]
            );
        }

        if ($ifRegister && $request->has('description')) {
            $seo->update(
                [
                    'description_nl' => "Beschrijf jezelf kort: wat vind je leuk? wat is er belangrijk voor jou? druk de blauwe pen linksbeneden en klik op deze tekst of andere. Als je klaar bent, druk op de groene check.",
                    'description_en' => "Introduce yourself shortly: what do you like? what's really important for you? press the blue pen left bottom and select this text and edit. When you're done press the green check.",
                ]
            );
        }

        $seo->update(['seoble_type' => $string, 'seoble_id' => $id]);
        if ($string == 'App\Candidate') {

        }
    }

    public function updateSeo($request, $model)
    {
        $seomodel = $model->seo->first();

        if ($request->has('title')) {
            $title = $this->removeHtmlTags($request->input('title'));
            $seomodel->update([
                'title' => $title,
                'slug' => $title]);

        } elseif ($request->has('title_nl')) {
            $title = $this->removeHtmlTags($request->input('title_nl'));
            $seomodel->update([
                'title_nl' => $title,
                'slug_nl' => $title]);

        } elseif ($request->has('title_en')) {
            $title = $this->removeHtmlTags($request->input('title_en'));
            $seomodel->update([
                'title_en' => $title,
                'slug_en' => $title]);
        }

        if ($request->has('description_nl')) {
            $seomodel->update(['description_nl' => $this->removeHtmlTags($request->input('description_nl'))]);
        } elseif ($request->has('description_en')) {
            $seomodel->update(['description_en' => $this->removeHtmlTags($request->input('description_en'))]);
        }
        return true;
    }

    public function deleteSeo($id, $seoble_type)
    {

    }

    public function removeHtmlTags($input)
    {
        $input = str_replace('<h1>', '', $input);
        $input = str_replace('</h1>', '', $input);
        $input = str_replace('<strong>', '', $input);
        $input = str_replace('</strong>', '', $input);
        return $input;
    }

}
