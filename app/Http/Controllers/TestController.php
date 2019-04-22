<?php

namespace App\Http\Controllers;

use App\Repositories\Repository;

use App\Catalog;

class TestController extends Controller
{
    protected $model;

    public function __construct(Catalog $catalog)
    {
        $this->model = new Repository($catalog);
    }

    public function getIndex()
    {
        $data = $this->model->all();
        //dd($data);
        return $data;
    }

    public function getShow($id)
    {
        $data = $this->model->show($id);
        //dd($data);
        return $data;
    }


}
