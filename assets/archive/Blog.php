<?php


use App\Models\BlogModel;

class Blog extends \App\Controllers\BaseController
{
    function index($slug = null)
    {
            $sess = session();
            $sess->start();

            $model = new BlogModel();
            $data['news'] = $model->getPosts($slug);

            echo view('templates/stdheader', $data);
            echo view('blog/post');
            echo view('templates/stdfooter');
    }


}