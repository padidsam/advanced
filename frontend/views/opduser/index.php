<?php

//use yii\grid\GridView;
use yii\helpers\Html;
use kartik\grid\GridView;

echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'attribute' => 'doctorcode',
            'label' => 'รหัส'
        ],
//        [
//            'attribute' => 'loginname',
//            'label' => 'bbb'
//        ],
        [
            'attribute' => 'name',
            'label' => 'ชื่อ'
        ],
        [
            'attribute' => 'entryposition',
            'label' => 'ตำแหน่ง'
        ],
        [
            'attribute' => 'groupname',
            'label' => 'กลุ่ม'
        ]
    ]
]);
