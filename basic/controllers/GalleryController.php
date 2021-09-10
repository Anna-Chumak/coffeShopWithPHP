<?php

namespace app\controllers;
use app\models\Galleryitems;

class GalleryController extends AppController
{
    public function actionIndex()
    {
        $galleryItems = Galleryitems::find()->select('id, img, heading')->all();
        $this->setMetaTags();
        return $this->render('index', compact('galleryItems'));
    }

}
