<?php

namespace App\Controllers;



class Pages extends BaseController
{
    public function index()
    {

        echo view('templates/stdheader');
        echo view('pages/home');
        echo view('templates/stdfooter');
    }

    public function pages($page): string
    {

/*        if (file_exists(APPPATH.'views/pages/'.$page.'.php'))*/
            return view('templates/stdheader')
                . view('pages/'.$page)
                . view('templates/stdfooter');
       /* else
            return view('templates/stdheader')
                . view('pages/err404')
                . view('templates/stdfooter');*/

    }
}