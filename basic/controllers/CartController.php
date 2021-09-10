<?php
namespace app\controllers;
use app\models\Cart;
use Yii;
class CartController extends AppController {
    public function actionIndex() {
        $cart = (new Cart())->getCart();
        return $this->render('index', compact('cart'));
    }
    public function actionAdd() {
        $cart = new Cart();

        if (!Yii::$app->request->isPost) {
            $cart = (new Cart())->getCart();
            return $this->redirect(['cart/index', ['cart'=>$cart]]);
        }
        $data = Yii::$app->request->post();
        if (!isset($data['id'])) {
            return $this->redirect(['cart/index']);
        }
        if (!isset($data['count'])) {
            $data['count'] = 1;
        }
        $cart->addToCart($data['id'], $data['count']);
        if (Yii::$app->request->isAjax) { // с использованием AJAX
            $content = $cart->getCart();
            return $this->asJson($content);
        } else { // без использования AJAX
            return $this->redirect(['cart/index']);
        }
    }
    public function actionRemove($id) {
        $cart = new Cart();
        $cart->removeFromCart($id);
        return $this->redirect(['cart/index']);
    }
    public function actionClear() {
        $cart = new Cart();
        $cart->clearCart();
        return $this->redirect(['cart/index']);
    }

    public function actionUpdate() {
        $cart = new Cart();

        if (!Yii::$app->request->isPost) {
            return $this->redirect(['cart/index']);
        }
        $data = Yii::$app->request->post();
        if (!isset($data['count'])) {
            return $this->redirect(['cart/index']);
        }
        if (!is_array($data['count'])) {
            return $this->redirect(['cart/index']);
        }
        $cart->updateCart($data);
        return $this->redirect(['cart/index']);
          
    }
       
}

