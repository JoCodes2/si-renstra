<?php


namespace App\Interfaces;

use App\Http\Requests\GapRequest;

interface GapInterfaces
{
    public function getAllData();
    public function createData(GapRequest $request);
    public function deleteData($id);
}
