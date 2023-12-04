<?php

namespace App\Controllers;

use App\Models\BlogModel;
class Blog extends BaseController
{
    function index($slug = 'post')
    {
            $model = new BlogModel();
            $data['news'] = $model->getPosts();

            echo view('templates/stdheader', $data);
            echo view('blog/'.$slug);
            echo view('templates/stdfooter');
    }
}