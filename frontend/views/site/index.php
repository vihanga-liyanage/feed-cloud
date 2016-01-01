<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">
            <?php 
                if (Yii::$app->user->isGuest) {
                    echo "Hello geust!";
                } else {
                    echo Yii::$app->user->id; 
                }
            ?>
        </p>

        
    </div>

    <div class="body-content">

    </div>
</div>
