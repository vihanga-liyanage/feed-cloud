<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\File */
/* @var $form yii\widgets\ActiveForm */
?>

<h1>This is student home</h1>

<?= Html::a('View My Feedback Files', ['file/index'], ['class' => 'btn btn-success']) ?>
<br><br>
<?= Html::a('Upload New Feedback File', ['file/create'], ['class' => 'btn btn-success']) ?>
<br><br>
<?= Html::a('View My Academic Years', ['year/index'], ['class' => 'btn btn-success']) ?>
<br><br>
<?= Html::a('Add New Academic Year', ['year/create'], ['class' => 'btn btn-success']) ?>
<br><br>
<?= Html::a('View My Modules', ['module/index'], ['class' => 'btn btn-success']) ?>
<br><br>
<?= Html::a('Add New Module', ['module/create'], ['class' => 'btn btn-success']) ?>