<?php
/* @var $this yii\web\View */
$this->title = 'โรงพยาบาลสุวรรณคูหา';
?>
ทดสอบหน้าแรก aaa

<?php
    Yii::$app->db->open();
    
?>
<?php
$str = 'padidsam11111';

if (md5($str) === 'a5bca4f99d7fc0c158f1bd8028e5011c') {
    echo "Would you like a green or red padidsam11111?";
    echo "<br>ทดสอบอัพgithob"
}

?>