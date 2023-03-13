<?php

namespace app\controllers;

use frw\Controller;

class MainController extends Controller
{

    public function indexAction()
    {
        $this->setMeta('Главная страница', 'Description...', 'keywords...');
        $this->set(['var' => 'TEST VAR']); // or use compact()
    }

}
