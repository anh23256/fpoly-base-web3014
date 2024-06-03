<?php

namespace Admin\Xuongoop\Controllers\Client;

use Admin\Xuongoop\Commons\Controller;
class HomeController extends Controller
{
    public function index() {
        $name = 'DucTV44';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}