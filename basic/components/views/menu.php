<?php
/*
* Файл components/views/menu.php
*/
use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="row">
      <div class="col s12 m10 l10 offset-m1 offset-l1">
        <ul class="grey-text text-darken-3 category">
          <li><a class="grey-text text-darken-3" href="<?= Url::to(['menu/index']); ?>">
          All Drinks</a></li>
          <?php foreach ($data as $item1): ?>
            <li><a class="grey-text text-darken-3" href="<?= Url::to(['menu/category', 'id' => $item1['id']]); ?>">
            <?= Html::encode($item1['name']); ?>
            </li>
          <?php endforeach;?>
        </ul>
      </div>
<div>

