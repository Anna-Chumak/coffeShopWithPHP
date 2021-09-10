<?php

namespace app\controllers;

class HomeController extends AppController
{
    public function actionIndex()
    {
        $this->setMetaTags();
        return $this->render('index');
    }
}
