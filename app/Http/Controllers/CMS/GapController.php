<?php

namespace App\Http\Controllers\CMS;

use App\Http\Controllers\Controller;
use App\Http\Requests\GapRequest;
use App\Repositories\GapRepositories;
use Illuminate\Http\Request;

class GapController extends Controller
{
    protected $gapRepo;
    public function __construct(GapRepositories $gapRepo)
    {
        $this->gapRepo = $gapRepo;
    }
    public function getAlldata()
    {
        return $this->gapRepo->getAllData();
    }
    public  function createData(GapRequest $request)
    {
        return $this->gapRepo->createData($request);
    }
    public function deleteData($id)
    {
        return $this->gapRepo->deleteData($id);
    }
}
