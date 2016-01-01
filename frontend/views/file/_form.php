<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Module;

/* @var $this yii\web\View */
/* @var $model frontend\models\File */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="file-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

	<?= $form->field($model, 'module')->dropDownList(
    	ArrayHelper::map(Module::find()->all(), 'id', 'name'),
    	['prompt'=>'Select Module']) 
    ?>    

    <?= $form->field($model, 'file')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Upload' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
