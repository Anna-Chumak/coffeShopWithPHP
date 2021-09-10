<?php

namespace app\controllers;
use app\models\Catergory;
use app\models\Coffee;

class ProductController extends AppController
{
    public function actionIndex($id) {
        $id = (int)$id;
        $coffee = Coffee::find()->select('id, name, isHot, isCoffee, category, serving_size, calories, totalFat, saturatedFat, transFat, cholesterol, sodium, totalCarbohydrates, dietaryFiber, sugars, protein, caffeine, indredients')->where(['id' => $id])->one(); 
        $category = Catergory::find()->select('id,name')->where(['id'=>$coffee->category])->one();
        return $this->render('index',
            compact('category', 'coffee')
        );
    }
}
