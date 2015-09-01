<?php

//use yii\grid\GridView;
use kartik\grid\GridView;

GridView::widget([
    'dataProvider' => $dataProvider,
   
    'panel' => [
        'before' => 'รายงาน xxxx',
        'after' => 'ประมวลผล ณ ' . date('Y-m-d M:i:s')
    ],
    ]
);
?>