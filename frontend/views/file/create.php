<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\File */

$this->title = 'Upload New Feedback File';
$this->params['breadcrumbs'][] = ['label' => 'Files', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
