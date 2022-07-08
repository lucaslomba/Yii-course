<?php
namespace frontend\controllers;

use yii\web\Controller;

class ProductController extends Controller {
    public function actionIndex(){
        $menu = 'category';
        return $this->render('index', ['menu' => $menu]);
    }

    public function actionDetail($id, $name){
        return $this->render('detail', ['id'=>$id, 'name'=>$name]);
    }
}