<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'Feed-Cloud';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome to Feed-Cloud!</h1>
        <h1><small>The student feedback portal.</small></h1>
        

        <p class="slogan">
            
        </p>

        <p>Sign up or Login to continue</p>
        <?= Html::a('Sign Up', ['/site/signup'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Login', ['/site/login'], ['class' => 'btn btn-success']) ?>
    </div>

    <div class="body-content">

    </div>
</div>
