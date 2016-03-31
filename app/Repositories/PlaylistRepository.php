<?php
namespace App\Repositories;

class PlaylistRepository extends SeoRepository
{
    public function storePoll($input)
    {
        return $this->log->create($input);
    }

    public function updatePoll($id, $input)
    {
        $log = $this->findById($id, 'log');
        $log->update($input);
        return $log;
    }

    public function deletePoll($id)
    {
        $log = $this->findById($id, 'log')->delete();
    }

}
