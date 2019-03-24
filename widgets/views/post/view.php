<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $embeddedController string Route to embedded controller */

\yii\web\YiiAsset::register($this);
?>
<div class="post-widget-view">

    <h2><?= Html::encode($model->title) ?></h2>

    <?= app\widgets\PostControllerWidget::widget(['action' => 'update', 'params'=>['id' => $model->id]]) ?>
    <?= app\widgets\PostControllerWidget::widget(['action' => 'delete', 'params'=>['id' => $model->id]]) ?>

    <br/><br/>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'details',
            'topic_id',
        ],
    ]) ?>

</div>
