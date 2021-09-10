<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Coffees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col l10 m10 s12 offset-l1 offset-m1">
<div class="coffee-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Coffee', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'isCoffee',
            'isHot',
            'category',
            //'serving_size',
            //'calories',
            //'totalFat',
            //'saturatedFat',
            //'transFat',
            //'cholesterol',
            //'sodium',
            //'totalCarbohydrates',
            //'dietaryFiber',
            //'sugars',
            //'protein',
            //'caffeine',
            //'indredients',
            //'price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
</div>