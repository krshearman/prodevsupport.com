<?php

namespace App\Controllers;

use App\Models\BlogModel;
class Blog extends BaseController
{
    function index()
    {
            $model = new BlogModel();
            $data['news'] = $model->getPosts();

            echo view('templates/stdheader', $data);
            echo view('blog/post');
            echo view('templates/stdfooter');
    }


}