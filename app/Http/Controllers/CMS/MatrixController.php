<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\MatrixRequest;
use App\Repositories\MatrixRepositories;
use Illuminate\Http\Request;

class MatrixController extends Controller
{
    protected $MatrixRepo;
    public function __construct(MatrixRepositories $MatrixRepo)
    {
        $this->MatrixRepo = $MatrixRepo;
    }
    public function getAlldata($category)
    {
        return $this->MatrixRepo->getAllData($category);
    }
    public  function createData(MatrixRequest $request)
    {
        return $this->MatrixRepo->createData($request);
    }
    public function getDataById($id)
    {
        return $this->MatrixRepo->getDataById($id);
    }
    public function updateData(MatrixRequest $request, $id)
    {
        return $this->MatrixRepo->updateData($request, $id);
    }
    public function deleteData($id)
    {
        return $this->MatrixRepo->deleteData($id);
    }
}
