<?php

namespace App\Repositories;

use App\Http\Requests\SmartRequest;
use App\Interfaces\SmartInterfaces;
use App\Models\SmartModel;
use App\Traits\HttpResponseTraits;

class SmartRepositories implements SmartInterfaces
{
    use HttpResponseTraits;
    protected $SmartModel;
    public function __construct(SmartModel $SmartModel)
    {
        $this->SmartModel = $SmartModel;
    }
    public function getAllData($category)
    {
        $data = $this->SmartModel::where('category', $category)->get();
        if (!$data) {
            return $this->dataNotFound();
        }
        return $this->success($data);
    }
    public function createData(SmartRequest $request)
    {
        try {
            $data = $this->SmartModel::create($request->all());
            return $this->success($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }
    public function getDataById($id)
    {
        $data = $this->SmartModel::find($id);
        if (!$data) {
            return $this->dataNotFound();
        }
        return $this->success($data);
    }
    public function updateData(SmartRequest $request, $id)
    {
        try {
            $data = $this->SmartModel::find($id);
            if (!$data) {
                return $this->dataNotFound();
            }
            $data->update($request->all());
            return $this->success($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }
    public function deleteData($id)
    {
        try {
            $data = $this->SmartModel::find($id);
            if (!$data) {
                return $this->dataNotFound();
            }
            $data->delete();
            return $this->delete();
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }
}
