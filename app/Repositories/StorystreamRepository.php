<?php
namespace App\Repositories;

class StorystreamRepository extends SeoRepository
{
    public function storeStorystream($request)
    {
        $storystream = $this->storystream->create($request->only('title'));
        $this->storeSeo($request, $storystream->id, 'App\Storystream');
        return str_slug($request->title);
    }

    public function updateStorystream($request, $id)
    {
        $storystream = $this->storystream->update($request->only('title'));

    }

    public function deleteStorystream($id)
    {

    }

}
