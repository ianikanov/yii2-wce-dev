<?php

use yii\helpers\Html;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\Topic */
/* @var $embeddedController string Route to embedded controller */

?>
<span class="topic-widget-update">

    <?php
    Modal::begin([
        'header' => '<h2>'.Html::encode('Update Topic: ' . $model->name).'</h2>',
        'toggleButton' => ['tag' => 'a', 'label' => '<span class="glyphicon glyphicon-pencil"></span>', 'style' => 'cursor: pointer'],
    ]);

    echo $this->render('_form', [
        'model' => $model,
        'action' => [$embeddedController, 'action' => 'topic/update', 'id'=>$model->id],
    ]);
    
    Modal::end();
    
    ?>

</span>
