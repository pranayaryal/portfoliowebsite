<?php

namespace App\Http\Controllers;

interface Operations {

    public function activate($one, $two);

    /**
     * @param $one
     * @param $two
     */
    public function multiply($one, $two);
}