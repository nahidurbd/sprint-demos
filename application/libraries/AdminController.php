<?php

use Myth\Route;

class AdminController extends \Myth\Controllers\ThemedController {

    use \Myth\Auth\AuthTrait;

    public function __construct()
    {
        parent::__construct();

        $this->restrict( Route::named('login') );
    }

    //--------------------------------------------------------------------


}