<?php


class Test extends \App\Controllers\BaseController
{
    public function test(): string
    {
        return view('templates/stdheader')
            . view('pages/tempmain')
            . view('templates/stdfooter');
    }
}