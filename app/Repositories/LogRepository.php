<?php
namespace App\Repositories;

class LogRepository extends SeoRepository
{
    public function storeLog($input)
    {
        return $this->log->create($input);
    }

    public function updateLog($id, $input)
    {
        $log = $this->findById($id, 'log');
        $log->update($input);
        return $log;
    }

    public function deleteLog($id)
    {
        $log = $this->findById($id, 'log')->delete();
    }

}
