<div class="row">
        <div class="col s12 m10 offset-m1">
        <form action="<?= yii\helpers\Url::to(['cart/update']); ?>" method="post" id="cart">
                        <?=
                        yii\helpers\Html::hiddenInput(
                        Yii::$app->request->csrfParam,
                        Yii::$app->request->csrfToken
                        );
                        ?>
            <table>
                <thead>
                  <tr>
                      <th>Item Name</th>
                      <th>Quantity</th>
                      <th>Item Price</th>
                      <th>Delete</th>
                      <th>Update</th>
                      <th>Subtotal</th>
                  </tr>
                </thead>
        
                <tbody>
                  <?php if($cart['coffees']):?>
                    <?php foreach ($cart['coffees'] as $id=>$coffee):?>
                  <tr>
                      <td><?=$coffee['name']?></td>
                      <td><?=
                        yii\helpers\Html::input(
                        'number',
                        'count['.$id.']',
                        $coffee['count'],
                        ['style' => 'width: 3rem; text-align: right;']
                        );
                        ?></td>
                    <td>$<?=$coffee['price']?></td>
                    <td><a href="<?=yii\helpers\Url::to(['cart/remove', 'id' => $coffee['id']]); ?>" class="white btn"><i class="material-icons red-text">close</i></a></td>
                    <td><button type="submit" class="white btn"><a><i class="material-icons green-text text-lighten-1">create</i></a></button></td>
                    <td>$<?=$coffee['count']*$coffee['price']?></td>
                  </tr>
                  <?php endforeach;?>
                  <?php endif;?>
                  </tbody>
              </table>
            </form>
            <div class="col s3 m2 l2 offset-s9 offset-m10 offset-l10">
                <p><span>Total</span>: $<?=$cart['amount']?></p>

            </div>
            <div class="col s10 m6 l4 offset-s2 offset-m3 offset-l4 buttons-cart">
                <a href="<?= yii\helpers\Url::to(['cart/clear']); ?>" class="btn text-danger waves-effect white grey-text darken-text-2">Clear Order</a>
                <button class="btn waves-effect green lighten-1 white-text"><a href="<?= yii\helpers\Url::to(['order/confirm']); ?>" class="white-text">Place Order</a></button>
           </div>
        </div>
    </div>
