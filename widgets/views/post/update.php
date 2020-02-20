<?php

use yii\helpers\Html;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $embeddedController string Route to embedded controller */

?>
<span class="post-widget-update">

    <?php
    Modal::begin([
        'header' => '<h2>'.Html::encode('Update Post: ' . $model->title).'</h2>',
        'toggleButton' => ['tag' => 'a', 'label' => '<span class="glyphicon glyphicon-pencil"></span>', 'style' => 'cursor: pointer'],
    ]);

    echo $this->render('_form', [
        'model' => $model,
        'action' => [$embeddedController, 'action' => 'post/update', 'id'=>$model->id],
    ]);
    
    Modal::end();
    
    ?>

</span>
