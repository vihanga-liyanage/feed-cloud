<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\FileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Files';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="file-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create File', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'header'=>'File',
                'format'=>'raw',
                'value' => function ($data) {
                        $basepath = str_replace('\\', '/', Yii::$app->basePath).'/web/';
                        $path = str_replace($basepath, '', $data->path);
                        return Html::a($data->name, $path, array('target'=>'_blank'));
                    },
            ],
            
            [
                'header'=>'Owner name',
                'attribute'=>'user0.firstname',
            ],
            
            [   
                'header'=>'Module name',
                'attribute'=>'module0.name',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
