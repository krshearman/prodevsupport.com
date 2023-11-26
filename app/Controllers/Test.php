<?php

namespace App\Controllers;

class Test extends BaseController
{
    public function test(): string
    {
        return view('templates/stdheader')
            . view('pages/tempmain')
            . view('templates/stdfooter');
    }
}