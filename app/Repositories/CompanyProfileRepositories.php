<?php

namespace App\Repositories;

use App\Http\Requests\CompanyProfileRequest;
use App\Interfaces\CompanyProfileInterfaces;
use App\Models\CompanyProfileModel;
use App\Models\ResultModel;
use App\Traits\HttpResponseTraits;
use Illuminate\Http\Request;

class CompanyProfileRepositories implements CompanyProfileInterfaces
{
    use HttpResponseTraits;
    protected $companyProfileModel;
    protected $resultModel;
    public function __construct(CompanyProfileModel $companyProfileModel, ResultModel $resultModel)
    {
        $this->companyProfileModel = $companyProfileModel;
        $this->resultModel = $resultModel;
    }
    public function getAllData($category)
    {
        $data = $this->companyProfileModel::where('category', $category)->get();
        if (!$data) {
            return $this->dataNotFound();
        }
        return $this->success($data);
    }
    public function createData(CompanyProfileRequest $request)
    {
        try {
            $data = $this->companyProfileModel::create($request->all());
            return $this->success($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }
    public function getDataById($id)
    {
        $data = $this->companyProfileModel::find($id);
        if (!$data) {
            return $this->dataNotFound();
        }
        return $this->success($data);
    }
    public function updateData(CompanyProfileRequest $request, $id)
    {
        try {
            $data = $this->companyProfileModel::find($id);
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
            $data = $this->companyProfileModel::find($id);
            if (!$data) {
                return $this->dataNotFound();
            }
            $data->delete();
            return $this->delete();
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }



    // result
    public function createResult(Request $request)
    {
        try {
            $result = $this->resultModel::create($request->all());
            return $this->success($result);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }
    public function getAllResult($category)
    {
        $data = $this->resultModel::where('category_brainstorming', $category)->get();
        if (!$data) {
            return $this->dataNotFound();
        }
        return $this->success($data);
    }
    public function deleteResult($id)
    {
        try {
            $data = $this->resultModel::find($id);
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
