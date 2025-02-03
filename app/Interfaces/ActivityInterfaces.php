<?php


namespace App\Interfaces;

use App\Http\Requests\ActivityRequest;

interface ActivityInterfaces
{
    public function getAllData($category_activity);
    public function createData(ActivityRequest $request);
    public function getDataById($id);
    public function updateData(ActivityRequest $request, $id);
    public function deleteData($id);
}
