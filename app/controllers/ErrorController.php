<?php

namespace App\Controllers;

use App\Http\BaseController;

class ErrorController extends BaseController
{
    public function notFound()
    {
        $this->view('errors/404');
    }
}
