<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Topic */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Topics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="topic-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
        ],
    ]) ?>
    
    
    
    <p>Latest post</p>
    
    <?= !$model->last_post_id ? 'No posts' : app\widgets\PostControllerWidget::widget([
        'action' => 'view',
        'params' => [
            'id' => $model->last_post_id,
        ],
    ]) ?>
    
    <p>All posts</p>
    
    <?= app\widgets\PostControllerWidget::widget([
        'action' => 'index',
        'params' => [
            'query' => $model->getPosts(),
            'owner_id' => $model->id,
        ],
    ]) ?>

</div>
