<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public $test ;

    public function __construct($test = null)
    {
      $this->test = $test;
    }
    public function index()
    {
        $var = 'Nghĩa';
        $varibale2 = null;
        $varible3 = "null";
    }
}
