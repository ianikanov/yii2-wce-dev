<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Topic */
/* @var $embeddedController string Route to embedded controller */

\yii\web\YiiAsset::register($this);
?>
<div class="topic-widget-view">

    <h2><?= Html::encode($model->name) ?></h2>

    <?= app\widgets\TopicControllerWidget::widget(['action' => 'update', 'params'=>['id' => $model->id]]) ?>
    <?= app\widgets\TopicControllerWidget::widget(['action' => 'delete', 'params'=>['id' => $model->id]]) ?>

    <br/><br/>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
        ],
    ]) ?>

</div>
