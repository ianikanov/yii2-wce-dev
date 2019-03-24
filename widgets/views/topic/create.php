<?php

use yii\helpers\Html;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\Topic */
/* @var $embeddedController string Route to embedded controller */

?>
<div class="topic-widget-create">
    
    <?php
    Modal::begin([
        'header' => '<h2>'.Html::encode('Create Topic').'</h2>',
        'toggleButton' => ['tag' => 'a', 'label' => 'Create Topic', 'class' => 'btn btn-success'],
    ]);

    echo $this->render('_form', [
        'model' => $model,
        'action' => [$embeddedController, 'action' => 'topic/create'],
    ]);
    
    Modal::end();
    
    ?>

</div>
