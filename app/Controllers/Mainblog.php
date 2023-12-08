<?php

namespace App\Controllers;


use App\Models\BlogModel;
class Mainblog extends BaseController
{

    public function mainblog()
    {
        $sess = session();
        $sess->start();

        $model = new BlogModel();
        $data['news'] = $model->getPosts();

        echo view('templates/stdheader', $data);
        echo view('pages/mainblog');
        echo view('templates/stdfooter');
    }

}