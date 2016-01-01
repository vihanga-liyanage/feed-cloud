<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Module */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'My Modules', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="module-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'label' => 'Module title',
                'attribute' => 'name'
            ],
            [
                'label' => 'Academic year',
                'attribute' => 'year0.name'
            ]
        ],
    ]) ?>

</div>
