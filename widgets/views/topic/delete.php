<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Topic */
/* @var $embeddedController string Route to embedded controller */

\yii\web\YiiAsset::register($this);
?>
<span class="topic-widget-delete">

    <?= Html::a('Delete', [$embeddedController, 'action' => 'topic/delete', 'id' => $model->id, 'callback' => \Yii::$app->request->url], [
        'class' => 'btn btn-danger',
        'data' => [
            'confirm' => 'Are you sure you want to delete this item?',
            'method' => 'post',
        ],
    ]) ?>

</span>
