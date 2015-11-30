<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Session;

class NewOperations extends Controller implements Operations {

    /**
     * @var Session
     */
    private $session;

    public function __construct(Session $session)
    {

        $this->session = $session;
    }

    public function activate($one, $too)
    {
        $var = $one + $too;

        var_dump("this is nice");

        $three= $this->multiply($one, $too);

        return $three;


    }

    /**
     * @param $one
     * @param $too
     */
    public function multiply($one, $too)
    {
       return $one * $too;
    }
}
