<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orders';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="order-index">

    <h1><?= Html::encode($this->title) ?></h1>

     <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'customerFirst',
            'customerLast',
            'customer_phone',
            'location_id',
            [
                'attribute' => 'status',
                'value' => function ($data) {
                switch ($data->status) {
                case 0: return '<span class="text-danger">New</span>';
                case 1: return '<span class="text-warning">In process</span>';
                case 2: return '<span class="text-success">Completed</span>';
                default: return 'Ошибка';
                }
                },
                'format' => 'html'
            ],
            [
                'attribute' => 'is_drive_through',
                'value' => function ($data) {
                switch ($data->status) {
                case 0: return '<span >No</span>';
                case 1: return '<span ">Yes</span>';
                default: return 'Ошибка';
                }
                },
                'format' => 'html'
            ],
            'total',
            'comment',
            'created_at',
            'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
