<?php

namespace frontend\Controllers;

class ModController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    
    public function actionModreport()
    {
        echo 'สวัสดี';
    }

}
