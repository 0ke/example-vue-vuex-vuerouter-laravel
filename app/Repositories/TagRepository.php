<?php
namespace App\Repositories;

class TagRepository extends SeoRepository
{
    public function storeTag($input)
    {
        return $this->log->create($input);
    }

    public function updateTag($id, $input)
    {
        $log = $this->findById($id, 'log');
        $log->update($input);
        return $log;
    }

    public function deleteTag($id)
    {
        $log = $this->findById($id, 'log')->delete();
    }

}
