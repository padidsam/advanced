<?php

namespace frontend\controllers;

use yii;
use yii\web\Controller;
use frontend\models\Users;
use yii\data\ArrayDataProvider;

class OpduserController extends Controller {

    public $layout = "cosmo";

    public function actionIndex() {
        $use = new Users();
        $user = $use->GetUserAll();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $user,
            'pagination' => [
                'pageSize' => 10,
            ],
            'sort' => [
                'attributes' => ['doctorcode'],
            ],
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider
        ]);
    }

}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

