<?php

namespace App\Repositories;

use App\Http\Requests\GapRequest;
use App\Interfaces\GapInterfaces;
use App\Models\GapModel;
use App\Traits\HttpResponseTraits;

class GapRepositories implements GapInterfaces
{
    use HttpResponseTraits;
    protected $gapModel;
    public function __construct(GapModel $gapModel)
    {
        $this->gapModel = $gapModel;
    }
    public function getAllData()
    {
        $data = $this->gapModel::all();
        if (!$data) {
            return $this->dataNotFound();
        }
        return $this->success($data);
    }
    public function createData(GapRequest $request) {}
    public function deleteData($id) {}
}
