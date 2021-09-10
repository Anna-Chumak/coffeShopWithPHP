<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use app\components\TreeWidget;
?>
<?= TreeWidget::widget(); ?>
<div class="row item-info">
  <div class="col l10 m10 s10 offset-s1 offset-l1 offset-m1 item-container">
    <div class="col l5 m5 hide-on-small-only item-image">
      <img src="<?=\yii\helpers\Url::to(['images/cup.jpg'])?>" alt="">
      <a href="#" class = "grey-text text-darken-3"><h4><?=$coffee->name?></h4></a>
      <h5><?=$category->name?></h5>
      <?php $icon = $coffee->isHot?"local_fire_department":"ac_unit";
        $class = $coffee->isHot?"hot":"cold"?>
    <i class = "material-icons <?=$class?>"><?=$icon?></i>
    </div>
    <div class="col l5 m5 s10  offset-l1 offset-m1 nutrition-info">
      <h4>Nutrition Information</h4>
      <p><span class = "nutrition-heading">Serving Size</span> <?=$coffee->serving_size?></p>
      <div class="divider"></div>
      <p><span class = "nutrition-heading">Calories</span> <?=$coffee->calories?></p>
      <div class="divider"></div>      
      <p><span class = "nutrition-heading">Total Fat</span><?=$coffee->totalFat?></p>
      <p>Saturated Fat <?=$coffee->saturatedFat?></p>
      <p>Trans Fat <?=$coffee->transFat?></p>
      <div class="divider"></div>      
      <p><span class = "nutrition-heading">Cholesterol</span> <?=$coffee->cholesterol?></p>
      <div class="divider"></div>      
      <p><span class = "nutrition-heading">Sodium</span> <?=$coffee->sodium?></p>
      <div class="divider"></div>      
      <p><span class = "nutrition-heading">Total Carbohydrates</span> <?=$coffee->totalCarbohydrates?></p>
      <p>Dietary Fiber <?=$coffee->dietaryFiber?></p>
      <p>Sugars <?=$coffee->sugars?></p>
      <div class="divider"></div>      
      <p><span class = "nutrition-heading">Protein</span> <?=$coffee->protein?></p>
      <div class="divider"></div>      
      <p><span class = "nutrition-heading">Caffeine</span> <?=$coffee->caffeine?></p>
      <div class="divider"></div>      
      <h4>Ingredients</h4>
      <p><?=$coffee->indredients?></p>
    </div>
  </div>
</div>