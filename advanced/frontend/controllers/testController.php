<?php
namespace frontend\controllers;

use yii\web\Controller;

class TestController extends Controller {
    public function actionServer(){
        echo "Teste Controller";
    }

    public function actionTesting(){
        $number = 12345;
        $name = 'Macbook';
        $array = ['Mac', 'MacPro', 'Apple'];
        return $this->render('Testing', ['number' => $number, 'name' => $name, 'array' => $array]);
    }
}