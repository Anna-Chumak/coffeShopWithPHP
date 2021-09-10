<div class="row">
    <div class="col l10 m10 s12 offset-l1 offset-m1 grid">
        <h2>Find Pure Joy in Coffee</h2>
        <div class="grid-container">
        <?php foreach($galleryItems as $item):?>
            <div class = "grid-item-container">
                <img src="<?=\yii\helpers\Url::to(['images/gallery/']).'/'.$item->img?>" alt="" class="grid-item">
                <p><?=$item->heading?></p>
            </div>
        <?php endforeach;?>
        </div>
    </div>
</div>