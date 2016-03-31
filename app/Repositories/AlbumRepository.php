<?php
namespace App\Repositories;

class AlbumRepository extends SeoRepository
{
    public function storeAlbum($request)
    {
        $a = $this->album->create($request->only('title', 'download', 'buy'));

        $this->storeSeo($request, $a->id, 'App\Album');
        //$this->imageputter->createThumbnails($request->cover, $album, 'album');
        if ($request->has('genres')) {
            $a->genres()->attach($request->genres);
        }
    }

    public function updateAlbum($request, $album)
    {
        if ($request->has('body_nl')) {
            $album->update($request->only('body_nl'));
        } elseif ($request->has('body_en')) {
            $album->update($request->only('body_en'));
        }
        $this->updateSeo($request, $album);
    }

    public function deleteAlbum()
    {

    }
}
