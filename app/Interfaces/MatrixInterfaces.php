<?php


namespace App\Interfaces;

use App\Http\Requests\MatrixRequest;

interface MatrixInterfaces
{
    public function getAllData($category);
    public function getDataById($id);
    public function createData(MatrixRequest $request);
    public function updateData(MatrixRequest $request, $id);
    public function deleteData($id);
}
