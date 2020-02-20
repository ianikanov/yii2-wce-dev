<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Widget as Controller extension</h1>
    </div>

    <div class="body-content">

        <?= \app\widgets\TopicControllerWidget::widget([
            'action' => 'index',
            'params' => [
                'query' => app\models\Topic::find()
            ],
        ]) ?>

    </div>
</div>
