<?php

namespace frontend\models;

class Users{
    function  GetUserAll(){
        $sql="select o.doctorcode,o.loginname,o.name,o.entryposition,o.groupname from opduser o where o.account_disable='N' or o.account_disable is null order by o.doctorcode asc";
        try {
            $result = \yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        //$result = \yii::$app->db->createCommand($sql)->queryAll();

        return $result;
    }
}