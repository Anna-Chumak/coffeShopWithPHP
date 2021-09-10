<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\modules\admin\models\Location;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row">
    <div class="col l8 m8 s12 offset-l2 offset-m2">
<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php $items = [
            0 => 'New',
            1 => 'In process',
            2 => 'Competed',
            ];
            $drive=[
            0=>'No',
            1=>'Yes,'];
            $locations = Location::find()->select('id')->asArray()->all(); 
            ?>

    <?= $form->field($model, 'customerFirst')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'customerLast')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'customer_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location_id')->dropDownList($locations) ?>

    <?= $form->field($model, 'is_drive_through')->dropDownList($drive)?>

    <?= $form->field($model, 'total')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList($items) ?>

    <?= $form->field($model, 'created_at')->textInput(['readonly' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput(['readonly' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>