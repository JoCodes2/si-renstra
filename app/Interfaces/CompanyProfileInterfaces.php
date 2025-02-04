<?php


namespace App\Interfaces;

use App\Http\Requests\CompanyProfileRequest;
use Illuminate\Http\Request;

interface CompanyProfileInterfaces
{
    public function getAllData($category);
    public function getDataById($id);
    public function createData(CompanyProfileRequest $request);
    public function updateData(CompanyProfileRequest $request, $id);
    public function deleteData($id);
    public function createResult(Request $request);
    public function getAllResult($category);
    public function deleteResult($id);
}
