<?php
/*
* View-шаблон, файл modules/admin/views/auth/login.php
*/
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->title = 'Authorization';
?>
<div class="container">
    <div class="row"></div>
    <div class="row">
        <div class="col l4 m6 s12 offset-l4 offset-m3">
    <?php
    $form = ActiveForm::begin();
    ?>
    <?= $form->field($model, 'email')->input('email'); ?>
    <?= $form->field($model, 'password')->input('password'); ?>
    <div class="form-group center">
    <?= Html::submitButton('Send', ['class' => 'btn green lighten-1']) ?>
    </div>
    <?php
    ActiveForm::end();
    ?>
    </div>
    </div>
</div>