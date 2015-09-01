<?php

namespace frontend\Controllers;

use frontend\models\ModReport1;
use yii\data\ArrayDataProvider;

class ModController extends \yii\web\Controller {

    public function actionIndex() {
        $use = new ModReport1();
        $mod = $use->GetReport1();

        $dataProvider = new ArrayDataProvider([
            'allModels' => $mod,
            'pagination' => FALSE,
        ]);

        return $this->render('index', [
                    'dataProvider' => $dataProvider
        ]);
        echo 'test';
    }

}
