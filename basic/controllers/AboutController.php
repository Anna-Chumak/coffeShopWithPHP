<?php

namespace app\controllers;
use app\models\History;

class AboutController extends AppController
{
    public function actionIndex()
    {
        $historyItems = History::find()->select('id, year, title, img, description')->all();
        $this->setMetaTags();
        return $this->render('index', compact('historyItems'));
    }
}
