<?php

namespace app\controllers;
use app\models\Order;
use app\models\Cart;
use app\models\OrderItem;
use app\models\Location;
use Yii;

class OrderController extends \yii\web\Controller
{
    public $defaultAction = 'confirm';
    
    public function actionConfirm() {
        $locations = (new Location)->read();
        return $this->render('confirm', ['locations'=>$locations]);
    }
    
    public function actionComplete(){
        $order = new Order();
        $cart = new Cart();
        $content = $cart->getCart();
        if($content['coffees']){
            if (isset($_POST['customerFirst'])) {
                $order->customerFirst = $_POST['customerFirst'];
                $order->customerLast = $_POST['customerLast'];
                $order->customer_phone = $_POST['customer_phone'];
                $order->location_id = $_POST['location_id'];
                $order->is_drive_through = $_POST['is_drive_through'];
                $order->total = $content['amount'];
                $order->status = 1;
                $order->comment = "No comment";
                $order->insert();
                $order->addItems($content);
                $cart->clearCart();
                return $this->render('complete', compact('content' ,'order' ));
            }
        }
        // $locations = (new Location)->read();
        // return $this->render('confirm', ['locations'=>$locations]);
    }

}
