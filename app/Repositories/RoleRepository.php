<?php
namespace App\Repositories;

class RoleRepository extends SeoRepository
{
    public function storeRole($input)
    {
        return $this->log->create($input);
    }

    public function updateRole($id, $input)
    {
        $log = $this->findById($id, 'log');
        $log->update($input);
        return $log;
    }

    public function deleteRole($id)
    {
        $log = $this->findById($id, 'log')->delete();
    }

}
