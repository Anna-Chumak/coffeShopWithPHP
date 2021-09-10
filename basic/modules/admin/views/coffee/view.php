<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Coffee */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Coffees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="row">
    <div class="col l10 m10 s12 offset-l1 offset-m1">
<div class="coffee-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'isCoffee',
            'isHot',
            'category',
            'serving_size',
            'calories',
            'totalFat',
            'saturatedFat',
            'transFat',
            'cholesterol',
            'sodium',
            'totalCarbohydrates',
            'dietaryFiber',
            'sugars',
            'protein',
            'caffeine',
            'indredients',
            'price',
        ],
    ]) ?>

</div>
    </div>
    </div>
