<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActivityRequest;
use App\Repositories\ActivityRepositories;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public $acRepo;
    public function __construct(ActivityRepositories $acRepo)
    {
        $this->acRepo = $acRepo;
    }
    public function getAllData($category_activity)
    {
        return $this->acRepo->getAllData($category_activity);
    }
    public function createData(ActivityRequest $request)
    {
        return $this->acRepo->createData($request);
    }
    public function getDataById($id)
    {
        return $this->acRepo->getDataById($id);
    }
    public function updateData(ActivityRequest $request, $id)
    {
        return $this->acRepo->updateData($request, $id);
    }
    public function deleteData($id)
    {
        return $this->acRepo->deleteData($id);
    }
}
