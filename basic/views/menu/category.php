<?php
use yii\helpers\Html;
use app\assets\AppAsset;
use app\components\TreeWidget;
?>

<?= TreeWidget::widget(); ?>
<div class="row">
      <div class="col s12 m4 l4 offset-l4 offset-m4 center grey-text text-darken-3"><h4><?=$category->name?></h4></div> 
</div>
<div class="menu-items-container row">
<div class="col s12 m10 l10 offset-m1 offset-l1">
<?php foreach($coffees as $coffee):?>
    <div class="col l3 m4 s12 menu-item center">
        <img src="<?=\yii\helpers\Url::to(['images/cup.jpg'])?>" alt="">
        <a href="<?=\yii\helpers\Url::to(['product/index', 'id'=>$coffee->id]);?>" class = "grey-text text-darken-3"><h5><?=$coffee->name?></h5></a>
        <?php $icon = $coffee->isHot?"local_fire_department":"ac_unit";
        $class = $coffee->isHot?"hot":"cold"?>
        <i class = "material-icons <?=$class?>"><?=$icon?></i>
        <h5 class="grey-text text-darken-3">$<?=$coffee->price?></h5>
        <form 
        method="post" 
        action="<?=\yii\helpers\Url::to(['cart/add']);?>" 
        class="add-to-cart">
        <input type="hidden" name="id"
            value="<?= $coffee->id; ?>">
            <?=
            Html::hiddenInput(
            Yii::$app->request->csrfParam,
            Yii::$app->request->csrfToken
            );
            ?>
        <button type="submit" class="waves-effect waves-light green lighten-1 text-white btn">Add to cart</button>
        </form>
    </div>
    <?php endforeach;?>
    </div>
</div>