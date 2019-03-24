<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TopicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $embeddedController string Route to embedded controller */

?>
<div class="topic-widget-index">

    <h2><?= Html::encode('Topics') ?></h2>
    <?php echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= app\widgets\TopicControllerWidget::widget(['action' => 'create']) ?>
    </p>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget) {
            return app\widgets\TopicControllerWidget::widget(['action' => 'view', 'params'=>['id' => $model->id]]);
        },
    ]) ?>
</div>
