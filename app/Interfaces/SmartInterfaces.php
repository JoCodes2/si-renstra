<?php


namespace App\Interfaces;

use App\Http\Requests\SmartRequest;

interface SmartInterfaces
{
    public function getAllData($category);
    public function getDataById($id);
    public function createData(SmartRequest $request);
    public function updateData(SmartRequest $request, $id);
    public function deleteData($id);
}
