<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\SwotRequest;
use App\Repositories\SwotRepositories;
use Illuminate\Http\Request;

class SwotController extends Controller
{
    protected $SwotRepo;
    public function __construct(SwotRepositories $SwotRepo)
    {
        $this->SwotRepo = $SwotRepo;
    }
    public function getAlldata($category)
    {
        return $this->SwotRepo->getAllData($category);
    }
    public  function createData(SwotRequest $request)
    {
        return $this->SwotRepo->createData($request);
    }
    public function getDataById($id)
    {
        return $this->SwotRepo->getDataById($id);
    }
    public function updateData(SwotRequest $request, $id)
    {
        return $this->SwotRepo->updateData($request, $id);
    }
    public function deleteData($id)
    {
        return $this->SwotRepo->deleteData($id);
    }
}
