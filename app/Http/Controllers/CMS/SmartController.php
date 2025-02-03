<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\SmartRequest;
use App\Repositories\SmartRepositories;
use Illuminate\Http\Request;

class SmartController extends Controller
{
    protected $SmartRepo;
    public function __construct(SmartRepositories $SmartRepo)
    {
        $this->SmartRepo = $SmartRepo;
    }
    public function getAlldata($category)
    {
        return $this->SmartRepo->getAllData($category);
    }
    public  function createData(SmartRequest $request)
    {
        return $this->SmartRepo->createData($request);
    }
    public function getDataById($id)
    {
        return $this->SmartRepo->getDataById($id);
    }
    public function updateData(SmartRequest $request, $id)
    {
        return $this->SmartRepo->updateData($request, $id);
    }
    public function deleteData($id)
    {
        return $this->SmartRepo->deleteData($id);
    }
}
