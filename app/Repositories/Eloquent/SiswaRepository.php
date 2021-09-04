<?php

namespace App\Repositories\Eloquent;

use App\Repositories\SiswaRepositoryInterface;
use App\Models\Siswa;

class SiswaRepository implements SiswaRepositoryInterface{
    private $model;
    public function __construct(Siswa $model){
        $this->model = $model;
    }

    public function getAll(){
        return $this->model->all();
    }

    public function getById($id){
        return $this->model->findById($id);
    }

    public function create(array $attributes){
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes){
        $siswa = $this->model->findOrFail($id);
        $siswa->update($attributes);
        return $siswa;
    }

    public function delete($id){
        $this->model->delete($id);
    }


}