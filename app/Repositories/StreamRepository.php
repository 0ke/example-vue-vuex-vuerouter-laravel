<?php
namespace App\Repositories;

class StreamRepository extends SeoRepository
{
    public function storeStream($input)
    {
        return $this->log->create($input);
    }

    public function updateStream($id, $input)
    {
        $log = $this->findById($id, 'log');
        $log->update($input);
        return $log;
    }

    public function deleteStream($id)
    {
        $log = $this->findById($id, 'log')->delete();
    }

}
