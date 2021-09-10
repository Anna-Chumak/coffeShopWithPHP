<?php
namespace app\models;
use yii\base\Model;
use Yii;
class Cart extends Model {

    public function addToCart($id, $count = 1) {
        $count = (int)$count;
        if ($count < 1) {
            return;
        }
        $id = abs((int)$id);
        $coffee = Coffee::findOne($id);
        if (empty($coffee)) {
            return;
        }
        if ($count > 10) {
            $count = 10;
        }
        $session = Yii::$app->session;
        $session->open();
        if (!$session->has('cart')) {
            $session->set('cart', []);
            $cart = [];
        } else {
            $cart = $session->get('cart');
        }
        if (isset($cart['coffees'][$coffee->id])) { // такой товар уже есть?
            $count = $cart['coffees'][$coffee->id]['count'] + $count;
            if ($count > 100) {
                $count = 100;
            }
            $cart['coffees'][$coffee->id]['count'] = $count;
        } else { // такого товара еще нет
            $cart['coffees'][$coffee->id]['name'] = $coffee->name;
            $cart['coffees'][$coffee->id]['price'] = $coffee->price;
            $cart['coffees'][$coffee->id]['count'] = $count;
            $cart['coffees'][$coffee->id]['id'] = $coffee->id;

        }
        $amount = 0.0;
        foreach ($cart['coffees'] as $item) {
            $amount = $amount + $item['price'] * $item['count'];
        }
        $cart['amount'] = $amount;
        $session->set('cart', $cart);
    }

    public function removeFromCart($id) {
        $id = abs((int)$id);
        $session = Yii::$app->session;
        $session->open();
        if (!$session->has('cart')) {
            return;
        }
        $cart = $session->get('cart');
        if (!isset($cart['coffees'][$id])) {
            return;
        }
        unset($cart['coffees'][$id]);
        if (count($cart['coffees']) == 0) {
            $session->set('cart', []);
            return;
        }
        $amount = 0.0;
        foreach ($cart['coffees'] as $item) {
            $amount = $amount + $item['price'] * $item['count'];
        }
        $cart['amount'] = $amount;
        $session->set('cart', $cart);
    }

    public function getCart() {
        $session = Yii::$app->session;
        $session->open();
        if (!$session->has('cart')) {
            $session->set('cart', []);
            return [];
        } else {
            return $session->get('cart');
        }
    }
 
    public function clearCart() {
        $session = Yii::$app->session;
        $session->open();
        $session->set('cart', []);
    }

    public function updateCart($data) {
        $this->clearCart();
        foreach ($data['count'] as $id => $count) {
            $this->addToCart($id, $count);
        }
    }
       
       

}
