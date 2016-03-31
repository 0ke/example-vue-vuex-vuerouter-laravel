<?php
namespace App\Repositories;

class SubscriptionRepository extends SeoRepository
{
    public function storeSubscription($input)
    {
        return $this->log->create($input);
    }

    public function updateSubscription($id, $input)
    {
        $log = $this->findById($id, 'log');
        $log->update($input);
        return $log;
    }

    public function deleteSubscription($id)
    {
        $log = $this->findById($id, 'log')->delete();
    }

}
