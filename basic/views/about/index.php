<div id="timeline" class="timeline-container"> 
    <div class="timeline-header">
        <h3 class="center timeline-h3">CoffeeMan History</h3>
        <h4 class="center timeline-h4">We are proud of who we are!</h4>
    </div>
    <div class="timeline-main">
        <?php foreach($historyItems as $item):?>
            <div class="timeline-item active" data-text ='<?=$item->title?>'>
                <div class="timeline-content">
                    <img src="<?=\yii\helpers\Url::to(['images/history/']).'/'.$item->img?>" alt="" class="timeline-img" width ="1200px">
                    <h2 class="timeline-year"><?=$item->year?></h2>                        
                    <p class="timeline-text"><?=$item->description?></p>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>