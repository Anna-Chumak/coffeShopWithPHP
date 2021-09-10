<?php

namespace app\controllers;
use app\models\Catergory;
use app\models\Coffee;

class MenuController extends AppController
{
    public function actionIndex()
    {
        $coffees = Coffee::find()->select('id, name, isHot, isCoffee, category, serving_size, calories, totalFat, saturatedFat, transFat, cholesterol, sodium, totalCarbohydrates, dietaryFiber, sugars, protein, caffeine, indredients, price')->all(); 
        $this->setMetaTags();
        return $this->render('index', compact('coffees'));
    }

    public function actionCategory($id) {
        $id = (int)$id;
        $coffees = Coffee::find()->select('id, name, isHot, isCoffee, category, serving_size, calories, totalFat, saturatedFat, transFat, cholesterol, sodium, totalCarbohydrates, dietaryFiber, sugars, protein, caffeine, indredients, price')->where(['category' => $id])->all(); 
        // данные о категории
        $category = Catergory::find()->select('id,name')->where(['id'=>$id])->one();

        $this->setMetaTags();
        return $this->render(
        'category',
        compact('category', 'coffees')
        );
    }

}
