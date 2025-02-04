<?php

namespace App\Repositories;

use App\Http\Requests\MatrixRequest;
use App\Interfaces\MatrixInterfaces;
use App\Models\MatrixModel;
use App\Traits\HttpResponseTraits;

class MatrixRepositories implements MatrixInterfaces
{
    use HttpResponseTraits;
    protected $MatrixModel;
    public function __construct(MatrixModel $MatrixModel)
    {
        $this->MatrixModel = $MatrixModel;
    }
    public function getAllData($category)
    {
        $data = $this->MatrixModel::where('category', $category)->get();
        if (!$data) {
            return $this->dataNotFound();
        }
        return $this->success($data);
    }
    public function createData(MatrixRequest $request)
    {
        try {
            $data = $this->MatrixModel::create($request->all());
            return $this->success($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }
    public function getDataById($id)
    {
        $data = $this->MatrixModel::find($id);
        if (!$data) {
            return $this->dataNotFound();
        }
        return $this->success($data);
    }
    public function updateData(MatrixRequest $request, $id)
    {
        try {
            $data = $this->MatrixModel::find($id);
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
            $data = $this->MatrixModel::find($id);
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
