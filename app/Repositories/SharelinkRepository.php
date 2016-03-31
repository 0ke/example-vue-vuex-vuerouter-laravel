<?php
namespace App\Repositories;

class SharelinkRepository extends SeoRepository
{
    public function storeSharelink($url, $seoble_id, $ype)
    {
        $sharelink = $this->sharelink->create($request->only('website'));
        $sharelink->update(['icon_id' => $this->icon->where('website', $type)->first()->id]);
        $sharelink->users()->attach($seoble_id);
        return true;
    }

    public function updateSharelink($id, $request)
    {
        $log = $this->findById($id, 'log');
        $log->update($request);
        return $log;
    }

    public function deleteSharelink($id)
    {
        $log = $this->findById($id, 'log')->delete();
    }

}
