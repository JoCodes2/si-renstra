<?php

namespace App\Repositories;

use App\Http\Requests\GapRequest;
use App\Interfaces\GapInterfaces;
use App\Models\GapModel;
use App\Traits\HttpResponseTraits;

class GapRepositories implements GapInterfaces
{
    use HttpResponseTraits;
    protected $gapModel;
    public function __construct(GapModel $gapModel)
    {
        $this->gapModel = $gapModel;
    }
    public function getAllData()
    {
        $data = $this->gapModel::all();
        if (!$data) {
            return $this->dataNotFound();
        }
        return $this->success($data);
    }
    public function createData(GapRequest $request)
    {
        try {
            $data = new $this->gapModel;
            $data->id_swot = $request->input('id_swot');
            $data->current_state = $request->input('current_state');
            $data->gap = $request->input('gap');
            $data->planing = $request->input('planing');
            $data->save();
            return $this->success($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }
    public function deleteData($id)
    {
        try {
            $data = $this->gapModel::find($id);
            if (!$data) {
                return $this->dataNotFound();
            }
            $data->delete();
            return $this->delete();
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }
}
