<div class="row map-wrapper">
        <div class="col l10 m10 s12 offset-m1 offset-l1 map">
          <img src="<?=\yii\helpers\Url::to(['images/usa25.svg'])?>" alt="">
          <?php foreach($locations as $location):?>
          <a href="<?=\yii\helpers\Url::to(['locations/modal', 'class'=>$location->class])?>"><i id="<?=$location->class?>"class = "material-icons location" >location_on</i> </a>
          <?php endforeach;?>
        </div>  
  </div>

