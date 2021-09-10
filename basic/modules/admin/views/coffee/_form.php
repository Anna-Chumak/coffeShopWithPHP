<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Coffee */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col l10 m10 s12 offset-l1 offset-m1">
<div class="coffee-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'isCoffee')->textInput() ?>

    <?= $form->field($model, 'isHot')->textInput() ?>

    <?= $form->field($model, 'category')->textInput() ?>

    <?= $form->field($model, 'serving_size')->textInput() ?>

    <?= $form->field($model, 'calories')->textInput() ?>

    <?= $form->field($model, 'totalFat')->textInput() ?>

    <?= $form->field($model, 'saturatedFat')->textInput() ?>

    <?= $form->field($model, 'transFat')->textInput() ?>

    <?= $form->field($model, 'cholesterol')->textInput() ?>

    <?= $form->field($model, 'sodium')->textInput() ?>

    <?= $form->field($model, 'totalCarbohydrates')->textInput() ?>

    <?= $form->field($model, 'dietaryFiber')->textInput() ?>

    <?= $form->field($model, 'sugars')->textInput() ?>

    <?= $form->field($model, 'protein')->textInput() ?>

    <?= $form->field($model, 'caffeine')->textInput() ?>

    <?= $form->field($model, 'indredients')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>