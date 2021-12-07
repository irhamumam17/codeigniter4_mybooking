<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Helpers\ResponseFormatter;
use App\Models\Facility;
use CodeIgniter\RESTful\ResourceController;

class FacilityController extends ResourceController
{
    protected $modelName = Facility::class;
    protected $format = 'json';


    public function __construct()
    {
    }

    public function index()
    {
        return view('admin/facility/index');
    }

    public function getData()
    {
        try {
            $response = new ResponseFormatter();
            return $this->respond($response->success($this->model->findAll(), 'Facility retrieved successfully'));
        } catch (\Throwable $th) {
            return $response->error(message: $th->getMessage());
        }
    }

    public function create()
    {
        try {
            $response = new ResponseFormatter();
            $data = $this->request->getPost();
            if ($this->model->insert($data) == false) {
                return $this->respond($response->error(message: $this->model->errors()));
            }
            return $this->respond($response->success($this->model->findAll(), 'Facility created successfully'));
        } catch (\Throwable $th) {
            return $response->error(message: $th->getMessage());
        }
    }

    public function update($id = null)
    {
        try {
            $response = new ResponseFormatter();
            $data = $this->request->getRawInput();
            // return $this->respond($data);
            if ($this->model->update($id, $data) == false) {
                return $this->respond($response->error(message: $this->model->errors()));
            }
            return $this->respond($response->success($this->model->findAll(), 'Facility updated successfully'));
        } catch (\Throwable $th) {
            return $response->error(message: $th->getMessage());
        }
    }

    public function delete($id = null)
    {
        try {
            $response = new ResponseFormatter();
            if ($this->model->delete($id) == false) {
                return $this->respond($response->error(message: $this->model->errors()));
            }
            return $this->respond($response->success($this->model->findAll(), 'Facility deleted successfully'));
        } catch (\Throwable $th) {
            return $response->error(message: $th->getMessage());
        }
    }
}
