<?php

use yii\helpers\Html;
use yii\bootstrap\Modal;

/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $embeddedController string Route to embedded controller */

?>
<div class="post-widget-create">
    
    <?php
    Modal::begin([
        'header' => '<h2>'.Html::encode('Create Post').'</h2>',
        'toggleButton' => ['tag' => 'a', 'label' => '<span class="glyphicon glyphicon-plus-sign"></span>', 'title' => 'Create Post', 'style' => 'cursor: pointer'],
    ]);

    echo $this->render('_form', [
        'model' => $model,
        'action' => [$embeddedController, 'action' => 'post/create'],
    ]);
    
    Modal::end();
    
    ?>

</div>
