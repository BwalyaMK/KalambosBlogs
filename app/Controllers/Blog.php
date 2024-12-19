<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['blogs'] = $model->findAll();

        return view('blogs/index', $data);
    }

    public function view($id)
    {
        $model = new BlogModel();
        $data['blog'] = $model->find($id);

        return view('blogs/view', $data);
    }
}
