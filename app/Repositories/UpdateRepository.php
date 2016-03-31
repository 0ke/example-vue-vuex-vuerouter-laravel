<?php
namespace App\Repositories;

class UpdateRepository extends SeoRepository
{
    public function stUpdate($request)
    {
        $type = $this->type->create($request->only('title'));

        if ($request->has('visible')) {
            $type->update(['visible' => 1]);
        } else {
            $type->update(['visible' => 0]);
        }

        if ($request->has('position')) {
            $type->update($request->only('position'));
        }

        $this->storeSeo($request, $type->id, 'App\Type');
        return str_slug($request->title);
    }

    public function storeUpdate($request)
    {
        $subtype = $this->subtype->create($request->only('title', 'type_id', 'icon_id'));

        if ($request->has('visible')) {
            $subtype->update(['visible' => 1]);
        } else {
            $subtype->update(['visible' => 0]);
        }

        if ($request->has('position')) {
            $subtype->update($request->only('position'));
        }

        $type = $this->type->find($request->type_id)->seo->first()->slug;
        $this->storeSeo($request, $subtype->id, 'App\Subtype');
        return [$type, str_slug($request->title)];
    }

    public function updUpdate($request, $id)
    {
        $type = $this->findById($id, 'type');
        $type->update($request->only('title'));
        if ($request->has('visible')) {
            $type->update(['visible' => 1]);
        } else {
            $type->update(['visible' => 0]);
        }

        if ($request->has('position')) {
            $type->update($request->only('position'));
        }

        $this->updateSeo($request, $type);
        return str_slug($request->title);
    }

    public function updateUpdate($request, $id)
    {
        $subtype = $this->findById($id, 'subtype');
        $subtype->update($request->only('title', 'type_id', 'icon_id'));

        if ($request->has('visible')) {
            $subtype->update(['visible' => 1]);
        } else {
            $subtype->update(['visible' => 0]);
        }

        if ($request->has('position')) {
            $subtype->update($request->only('position'));
        }

        $this->updateSeo($request, $subtype);
        return [str_slug($subtype->type->title), str_slug($request->title)];
    }

    public function createTag($request)
    {
        $this->tag->create($request->only('title'));
    }
}
