<?php
namespace App\Repositories;

class LivestreamRepository extends SeoRepository
{
    public function storeLivestream($input)
    {
        return $this->livestream->create($input);
    }

    public function updateLivestream($id, $input)
    {
        $livestream = $this->findById($id, 'livestream');
        $livestream->update($input);
        return $livestream;
    }

    public function deleteLivestream($id)
    {
        $livestream = $this->findById($id, 'livestream')->delete();
    }

}
