<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Order */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="order-view">

    <h1>Order preview</h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'customerFirst',
            'customerLast',
            'customer_phone',
            'location_id',
            'is_drive_through',
            'total',
            'comment',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
<?php
$products = $model->orderItems;
?>
<table class="table table-bordered table-striped">
 <tr>
 <th>Name</th>
 <th>Quantity</th>
 <th>Price</th>
 <th>Subtotal</th>
 </tr>
 <?php foreach ($products as $product): ?>
 <tr>
 <td><?= $product->id; ?></td>
 <td class="text-right"><?= $product->count; ?></td>
 </tr>
 <?php endforeach; ?>
 <tr>
 <th colspan="3" class="text-right">Total</th>
 <th class="text-right"><?= $model->total; ?></th>
 </tr>
</table>