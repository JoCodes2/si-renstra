<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyProfileRequest;
use App\Repositories\CompanyProfileRepositories;
use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    protected $companyRepo;
    public function __construct(CompanyProfileRepositories $companyRepo)
    {
        $this->companyRepo = $companyRepo;
    }
    public function getAlldata($category)
    {
        return $this->companyRepo->getAllData($category);
    }
    public  function createData(CompanyProfileRequest $request)
    {
        return $this->companyRepo->createData($request);
    }
    public function getDataById($id)
    {
        return $this->companyRepo->getDataById($id);
    }
    public function updateData(CompanyProfileRequest $request, $id)
    {
        return $this->companyRepo->updateData($request, $id);
    }
    public function deleteData($id)
    {
        return $this->companyRepo->deleteData($id);
    }
}
