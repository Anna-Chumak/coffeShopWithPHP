<?php
namespace app\components;
use yii\base\Widget;
use app\models\Catergory;
use Yii;

class TreeWidget extends Widget {
    protected $data;
    public function run() {
    // пробуем извлечь данные из кеша
    $html = Yii::$app->cache->get('catalog-menu');
    if ($html === false) {
    // данных нет в кеше, получаем их заново
    $this->data = Catergory::find()->indexBy('id')->asArray()->all();
    
    $html = $this->render('menu', ['data' => $this->data]);

    // сохраняем полученные данные в кеше
    Yii::$app->cache->set('catalog-menu', $html, 60);
    }
    return $html;
    }
    /**
    * Функция принимает на вход линейный массив элеменов, связанных
    * отношениями parent-child, и возвращает массив в виде дерева
    */
}
   