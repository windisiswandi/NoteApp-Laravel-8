<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

class Dashboard extends BaseControlller {
    public function index()
    {
        echo "index";
    }
    public function blog()
    {
        echo "blog";
    }
}

?>