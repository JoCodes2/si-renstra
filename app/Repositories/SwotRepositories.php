<?php

namespace App\Repositories;

use App\Http\Requests\SwotRequest;
use App\Interfaces\SwotInterfaces;
use App\Models\SwotModel;
use App\Traits\HttpResponseTraits;

class SwotRepositories implements SwotInterfaces
{
    use HttpResponseTraits;
    protected $SwotModel;
    public function __construct(SwotModel $SwotModel)
    {
        $this->SwotModel = $SwotModel;
    }
    public function getAllData($category)
    {
        $data = $this->SwotModel::where('category', $category)->get();
        if (!$data) {
            return $this->dataNotFound();
        }
        return $this->success($data);
    }
    public function createData(SwotRequest $request)
    {
        try {
            $data = $this->SwotModel::create($request->all());
            return $this->success($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }
    public function getDataById($id) {}
    public function updateData(SwotRequest $request, $id) {}
    public function deleteData($id) {}
}
