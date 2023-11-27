<?php

namespace App\Controllers;

class Samples extends BaseController
{
    public function index($page = 'samplesmain'): string
    {
        return view('templates/stdheader')
            . view('samples/'.$page)
            . view('templates/stdfooter');
    }

  /*  public function samples($page): string
    {
        return view('templates/stdheader')
            . view('samples/'.$page)
            . view('templates/stdfooter');
    }*/
}