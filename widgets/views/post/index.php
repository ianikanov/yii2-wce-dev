<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $embeddedController string Route to embedded controller */

?>
<div class="post-widget-index">

    <h2><?= Html::encode('Posts') ?></h2>

    <p>
        <?= app\widgets\PostControllerWidget::widget(['action' => 'create']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'details',
            'topic_id',

        ],
    ]); ?>
</div>
