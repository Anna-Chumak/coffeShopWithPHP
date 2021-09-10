<?php

namespace app\controllers;
use app\models\Location;

class LocationsController extends AppController
{
    public function actionIndex()
    {
        $this->setMetaTags();
        $locations = Location::find()->select('id, city, class')->all(); 

        return $this->render('index', compact('locations'));
    }

    public function actionModal($class){
        $locations = Location::find()->select('id, city, class')->all(); 

        $content = Location::find()->select('id, city, class, address, address_line2, google_link')->where(['class'=>$class])->all(); 
        return $this->render('modal', compact('locations','content'));         
    }

}
