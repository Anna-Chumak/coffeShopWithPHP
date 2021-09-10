<?php
/*
* Файл view-шаблона modules/admin/views/default/index.php
*/
use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $queueOrders yii\data\ActiveDataProvider */
/* @var $processOrders yii\data\ActiveDataProvider */
$this->title = 'Orders';
?>
<h1><?= Html::encode($this->title) ?></h1>
<div class="center">
<h2>New Orders</h2>
</div>
<div class="row">
    <div class="col l10 m10 s12 offset-l1 offset-m1">

<?=
GridView::widget([
 'dataProvider' => $queueOrders,
 'columns' => [
 ['class' => 'yii\grid\SerialColumn'],
 'id',
 'customerFirst',
 'customerLast',
 'customer_phone',
 'location_id',
 [
     'attribute' => 'status',
     'value' => function ($data) {
     switch ($data->status) {
     case 0: return '<span class="text-danger">New</span>';
     case 1: return '<span class="text-warning">In process</span>';
     case 2: return '<span class="text-success">Completed</span>';
     default: return 'Ошибка';
     }
     },
     'format' => 'html'
 ],
 [
     'attribute' => 'is_drive_through',
     'value' => function ($data) {
     switch ($data->status) {
     case 0: return '<span >No</span>';
     case 1: return '<span ">Yes</span>';
     default: return 'Ошибка';
     }
     },
     'format' => 'html'
 ],
 'total',
 'comment',
 'created_at',
 'updated_at',
 ],
]);
?>
        
        </div>
</div>
<div class="center">
<h2>Orders in process</h2>
</div>
<div class="row">
    <div class="col l10 m10 s12 offset-l1 offset-m1">
<?=
GridView::widget([
 'dataProvider' => $processOrders,
 'columns' => [
 ['class' => 'yii\grid\SerialColumn'],
 'id',
 'customerFirst',
 'customerLast',
 'customer_phone',
 'location_id',
 [
     'attribute' => 'status',
     'value' => function ($data) {
     switch ($data->status) {
     case 0: return '<span class="text-danger">New</span>';
     case 1: return '<span class="text-warning">In process</span>';
     case 2: return '<span class="text-success">Completed</span>';
     default: return 'Ошибка';
     }
     },
     'format' => 'html'
 ],
 [
     'attribute' => 'is_drive_through',
     'value' => function ($data) {
     switch ($data->status) {
     case 0: return '<span >No</span>';
     case 1: return '<span ">Yes</span>';
     default: return 'Ошибка';
     }
     },
     'format' => 'html'
 ],
 'total',
 'comment',
 'created_at',
 'updated_at',
 ],
]);
?>
        
        </div>
</div>