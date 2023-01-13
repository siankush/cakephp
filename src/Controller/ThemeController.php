<?php

namespace App\Controller;
use App\Controller\AppController;

class ThemeController extends AppController {


    public function index(){
       
    $this->viewBuilder()->setlayout('themelayout'); 
    }
}


?>