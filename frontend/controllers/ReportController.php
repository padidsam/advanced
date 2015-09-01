<?php

namespace frontend\controllers;

use yii;

class ReportController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionReport1() {
        $sql = "select 
DISTINCT pt.hn, 
ov.vstdate,
pt.hn,
pt.cid,
concat(pt.pname,' ',pt.fname,'  ',pt.lname) as ptname,
concat(vt.pttype,' ',pty.`name`) pttype,
concat(odx.icd10,' ',ix.name) as pdxname

from ovst ov 
left outer join patient pt on pt.hn=ov.hn 
left outer join ovstdiag odx on odx.vn=ov.vn and odx.diagtype='1' 
left outer join kskdepartment sp on sp.depcode=ov.cur_dep 
left outer join ovstost oost on oost.ovstost=ov.ovstost 
left outer join icd101 icd1 on icd1.code=odx.icd10 
left outer join icd101 ix on ix.code=substring(odx.icd10,1,3)  
left outer join pttype pty on pty.pttype=ov.pttype  
left outer join vn_lock vk on vk.vn = ov.vn 
left outer join ovstist st on st.ovstist = ov.ovstist  
left outer join vn_stat vt on vt.vn=ov.vn  
left outer join ovst_drgs od on od.vn = ov.vn 
left outer join oapp on oapp.vn=ov.vn and oapp.app_no=1 
left outer join vn_opd_complete c on c.vn=ov.vn  
left outer join ovst_seq ovq on ovq.vn = ov.vn  
where (ov.vstdate between '2015-08-27' and '2015-09-30') and ov.spclty='31'  
GROUP BY pt.hn
order by ov.vstdate

";

//        $rawData = \yii::$app->db->createCommand($sql)->queryAll();
//        print_r($rawData);
        try {
            $rawData = \yii::$app->db->createCommand($sql)->queryAll();
        } catch (\yii\db\Exception $e) {
            throw new \yii\web\ConflictHttpException('sql error');
        }
        $dataProvider = new \yii\data\ArrayDataProvider([
            'allModels' => $rawData,
            'pagination' => FALSE,
            ]);
            
        return $this->render('report1', [
                    'dataProvider' => $dataProvider
        ]);
    }

}
