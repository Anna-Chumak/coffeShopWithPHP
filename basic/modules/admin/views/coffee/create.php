<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Coffee */

$this->title = 'Create Coffee';
$this->params['breadcrumbs'][] = ['label' => 'Coffees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
    <div class="col l10 m10 s12 offset-l1 offset-m1">
<div class="coffee-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
    </div>
    </div>