<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="row">
    <h4 class="center">Place Order</h4>
</div>
<div class="row">
    <div class="col l8 m8 s12 offset-l2 offset-m2">   
        <form id="confirm-btn" action="<?=yii\helpers\Url::to(['order/complete']);?>" method="post">
        <?=
Html::hiddenInput(
 Yii::$app->request->csrfParam,
 Yii::$app->request->csrfToken
 );
?>

            <div class="row">
                <div class="input-field col s6">
                    <input name="customerFirst" type="text">
                    <label for="first_name">First Name</label>
                </div>
                <div class="input-field col s6">
                    <input name="customerLast" type="text">
                    <label for="last_name">Last Name</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="customer_phone" type="text">
                    <label for="phone">Phone number</label>
                </div>
            </div>
            <div class="input-field col s12">
                <select name="location_id">
                <option value="" disabled selected>Choose your location</option>
                <?php foreach($locations as $location):?>
                <option name="location_id" value="<?=$location['id']?>"><?=$location['address']?>, <?=$location['address_line2']?></option>
                <?php endforeach;?>
                </select>
                <label>Location</label>
            </div>
                <label class="big">Pick up option</label>
                    <p>
                        <label>
                            <input class="with-gap" name="is_drive_through" type="radio" value="0" />
                            <span>In-Store</span>
                        </label>
                    </p>
                    </p>
                        <label>
                            <input class="with-gap" name="is_drive_through" type="radio"  value="1"/>
                            <span>Drive-Through</span>
                        </label>
                    </p>
                    <div class="center">
                        <button type="submit" class="btn waves-effect green lighten-1 white-text">Confirm Order</button>
                    </div>
        </form>
    </div>

</div>