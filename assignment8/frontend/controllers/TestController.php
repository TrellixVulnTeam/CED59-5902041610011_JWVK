<?php

namespace frontend\controllers;

use yii\web\Controller;

    class TestController extends Controller {

        public function actionIndex() {
            $data = 'Data Update';
            return $this->render('index', [
                'data' => $data
            ]);
        }

        public function actionTest() {
            echo 'test';
            return $this->render('test');
        }
    }