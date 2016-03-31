<?php
namespace App\Repositories;

class PostRepository extends SeoRepository
{
    public function storePost($request)
    {
        $post = $this->post->create(['body_nl' => '<p>Deel 2: Klik op pennetje, erna op deze tekst om aan te passen. Wanneer je klaar bent klik op de groene vink.</p>', 'body_en' => '<p>Part 2: Click the pen, click this text with your mouse and edit. When you are done click the green check.</p>']);

        if ($subtype = $this->subtype->where('title', '=', $request->category)->first()) {
            $post->update(['subtype_id' => $subtype->id]);
        } elseif ($type = $this->type->where('title', '=', $request->category)->first()) {
            $post->update(['type_id' => $type->id]);
        }

        if ($request->has('embed-check')) {
            $post->update(['embed' => $request->embed]);
        } elseif ($request->has('videourl-check')) {
            $post->update(['videourl' => $request->videourl]);
        }

        $post->users()->attach(auth()->user()->id);
        $this->storeSeo($request, $post->id, 'App\Post');
        $this->imageputter->createThumbnails($request->thumb, $post, 'post');

        if ($request->has('gallery-check')) {
            $this->imageputter->createGallery($request->gallery, $post, 'post');
        }

        if ($request->has('storystream-check')) {
            $post->storystreams()->attach($request->storystream_id);
        }

        return $post->id;
    }

    public function updatePost($request, $post)
    {
        if ($request->has('concept')) {
            $post->update(['concept' => ($request->concept === 'true')]);
        }
        if ($request->has('body_nl')) {
            $post->update($request->only('body_nl'));
        } elseif ($request->has('body_en')) {
            $post->update($request->only('body_en'));
        }
        if ($request->has('inclusions_nl')) {
            $post->update($request->only('inclusions_nl'));
        } elseif ($request->has('inclusions_en')) {
            $post->update($request->only('inclusions_en'));
        }
        if ($request->has('pros_nl')) {
            $post->update($request->only('pros_nl'));
        } elseif ($request->has('pros_en')) {
            $post->update($request->only('pros_en'));
        }
        if ($request->has('cons_nl')) {
            $post->update($request->only('cons_nl'));
        } elseif ($request->has('cons_en')) {
            $post->update($request->only('cons_en'));
        }
        $post->update($request->only('views', 'startdate', 'endingdate', 'price', 'location', 'score', 'matchscore'));
        $this->updateSeo($request, $post);

        if ($subtype = $this->subtype->where('title', '=', $request->category)->first()) {
            $post->update(['subtype_id' => $subtype->id]);
        } elseif ($type = $this->type->where('title', '=', $request->category)->first()) {
            $post->update(['type_id' => $type->id]);
        }

        return $post;
    }

    public function deletePost($id)
    {
        $post = $this->findById($id, 'post')->delete();
    }

}
