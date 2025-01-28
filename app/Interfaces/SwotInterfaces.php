<?php


namespace App\Interfaces;

use App\Http\Requests\SwotRequest;

interface SwotInterfaces
{
    public function getAllData($category);
    public function getDataById($id);
    public function createData(SwotRequest $request);
    public function updateData(SwotRequest $request, $id);
    public function deleteData($id);
}
