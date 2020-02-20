<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $owner_id integer */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $embeddedController string Route to embedded controller */

?>
<div class="post-widget-index">

    <h2><?= Html::encode('Posts') ?></h2>

    <p>
        <?= app\widgets\PostControllerWidget::widget(['action' => 'create', 'params'=>['owner_id' => $owner_id]]) ?>
    </p>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return app\widgets\PostControllerWidget::widget(['action' => 'view', 'params'=>['id' => $model->id]]);
        },
    ]) ?>
</div>
