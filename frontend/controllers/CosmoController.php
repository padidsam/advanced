<?php

namespace frontend\controllers;

class CosmoController extends \yii\web\Controller {

    public $layout = "cosmo";
    
    public function actionIndex() {
        return $this->render('index');
    }

}
