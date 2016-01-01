<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Year;

/* @var $this yii\web\View */
/* @var $model frontend\models\Module */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="module-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'year')->dropDownList(
    	ArrayHelper::map(Year::find()->all(), 'id', 'name'),
    	['prompt'=>'Select Academic year']) 

    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
