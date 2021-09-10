<div class="row map-wrapper">
        <div class="col l10 m10 s12 offset-m1 offset-l1 map">
          <img src="<?=\yii\helpers\Url::to(['images/usa25.svg'])?>" alt="">
          <?php foreach($locations as $location):?>
          <a href="<?=\yii\helpers\Url::to(['locations/modal', 'class'=>$location->class])?>"><i id="<?=$location->class?>"class = "material-icons location" >location_on</i> </a>
          <?php endforeach;?>
        </div>  
  </div>
  <div class="row ">
  <div class="col l4 s10 m6  city modal">
    <div class="card modal-content">
        <div class="card-image">
            <img src="<?=\yii\helpers\Url::to(['images/home-gallery/0.jpg']);?>">
            <span class="card-title white-text">CoffeeMan in <?=$content[0]->city?></span>
        </div>
        <div class="card-content brown lighten-1 white-text ">
            <p><?=$content[0]->address?></p>
            <p><?=$content[0]->address_line2?></p>
        </div>
        <div class="card-action brown lighten-1 ">
            <a target = "_blank" href="<?=$content[0]->google_link?>" class="white-text ">See on Google Maps</a>
        </div>
    </div>
</div>
</div>