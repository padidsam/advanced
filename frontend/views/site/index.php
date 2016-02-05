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
    echo "<br>ทดสอบอัพgithob<br>";
}

$route1 = Yii::$app->urlManager->createUrl('test/test1');
?>

<a href="<?=$route1?>">ไปที่ test1</a>
<br>
<?php
$route2 = Yii::$app->urlManager->createUrl(['test/test2','name'=>'ประดิษฐ์','lname'=>'สิทธิมงคล']);
?>

<a href="<?=$route2?>">ไปที่ test2</a>
