<div class="row">
    <div class="col l8 m10 s12 offset-l2 offset-m1 ">
        <div class="center">
            <h2 >Order Information</h2>
        </div>
        <p>Your order number <?=$order->id?> was placed.</p>
        <p>Items:</p>
        <?php foreach($content['coffees'] as $coffee):?>
            <p><?=$coffee['name']?>: <?=$coffee['count']?></p>
        <?php endforeach;?>
        <p>Total: <?=$content['amount']?></p>
    </div>

</div>