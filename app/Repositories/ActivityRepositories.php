<?php

namespace App\Repositories;

use App\Http\Requests\ActivityRequest;
use App\Interfaces\ActivityInterfaces;
use App\Models\ActivityModel;
use App\Traits\HttpResponseTraits;

class ActivityRepositories implements ActivityInterfaces
{
    use HttpResponseTraits;
    protected $acRepo;
    public function __construct(ActivityModel $acRepo)
    {
        $this->acRepo = $acRepo;
    }
    public function getAllData($category_activity)
    {
        $data = $this->acRepo::with('companyProfile')->where('category_activity', $category_activity)->get();
        if (!$data) {
            return $this->dataNotFound();
        }
        return $this->success($data);
    }
    public function createData(ActivityRequest $request)
    {
        try {
            $data = new $this->acRepo;
            $data->id_company_profile = $request->input('id_company_profile');
            $data->activity_name = $request->input('activity_name');
            $data->supervisor_name = $request->input('supervisor_name');
            $data->category_activity = $request->input('category_activity');
            $data->devisi = $request->input('devisi');
            $data->pic = $request->input('pic');
            $data->target = $request->input('target') ?? 0;
            $data->realization = $request->input('realization') ?? 0;
            $data->achievement = $request->input('achievement') ?? 0;
            $data->deadline = $request->input('deadline');
            $data->status_activity = $request->input('status_activity') ?? 'not-completed';
            $data->description = $request->input('description');
            $data->save();
            return $this->success($data);
        } catch (\Throwable $th) {
            return $this->error($th->getMessage(), 400, $th, class_basename($this), __FUNCTION__);
        }
    }
    public function getDataById($id) {}
    public function updateData(ActivityRequest $request, $id) {}
    public function deleteData($id) {}
}
