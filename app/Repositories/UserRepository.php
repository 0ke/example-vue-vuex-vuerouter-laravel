<?php
namespace App\Repositories;

class UserRepository extends SeoRepository
{
    public function storeUser($request)
    {
        $u = $this->user->create($request->except('website', 'description', 'profilepic'));
        $u->update(['password' => bcrypt($request->password)]);
        if ($request->has('description')) {
            $u->update(['about_nl' => '<p>' . $request->description . '</p>', 'about_en' => '<p>' . $request->description . '</p>']);
        }
        $this->storeSeo($request, $u->id, 'App\User');
        $this->imageputter->createAvatars($u->id, $request->profilepic);

        if ($request->has('website')) {
            $sharelink = $this->sharelink->create(['url' => $request->website]);
            $sharelink->update(['icon_id' => $this->icon->where('website', 'Website')->first()->id]);
            $sharelink->users()->attach($u->id);
        }

        return $u;
    }

    public function updateUser($id, $request)
    {
        $user = $this->findById($id, 'user');

        if ($request->has('about_nl')) {
            $user->update($request->only('about_nl'));
        } elseif ($request->has('about_en')) {
            $user->update($request->only('about_en'));
        }

        $this->updateSeo($request, $user);

        return $user;
    }

    public function deleteUser($id)
    {
        $user = $this->findById($id, 'user');
        $user->seo->first()->delete();
        $user->delete();

        return true;
    }

}
