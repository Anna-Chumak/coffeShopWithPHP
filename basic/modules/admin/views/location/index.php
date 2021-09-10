<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Locations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col l10 m10 s12 offset-l1 offset-m1">
<div class="location-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Location', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'address',
            'address_line2',
            'img',
            'city',
            //'google_link',
            //'class',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
</div>
</div>
