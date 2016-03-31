<?php
namespace App\Repositories;

class CandidateRepository extends SeoRepository
{
    public function storeCandidate($request)
    {
        $c = $this->candidate->create($request->except('_token'));

        $role = $this->findSeoble(str_slug($request['function']));
        $c->roles()->attach($role->id);

        //$request->title = $request->input('first_name') . ' ' . $request->input('last_name');
        // $request['slug'] = $request['title'];
        // $request['seoble_id'] = $c->id;
        // $request['seoble_type'] = 'App\Candidate';
        // $input['description_nl'] = $input['description'];
        // $input['description_en'] = $input['description'];

        $this->storeSeo($request, $c->id, 'App\Candidate');

    }

    public function updateCandidate()
    {

    }

    public function deleteCandidate()
    {

    }
}
