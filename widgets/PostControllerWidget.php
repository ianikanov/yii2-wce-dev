<?php

namespace app\widgets;

use Yii;
use app\models\Post;
use yii\data\ActiveDataProvider;

/**
 * PostControllerWidget implements the embedded CRUD actions for Post model.
 */
class PostControllerWidget extends \ianikanov\wce\Widget
{

    public $path = 'post';

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex($query, $owner_id)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'owner_id' => $owner_id,            
        ]);
    }

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($owner_id)
    {
        $model = new Post();
        $model->topic_id = $owner_id;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return 'success';
        }
        
        if ($model->hasErrors()) {
            foreach ($model->errors as $field => $messages) {
                foreach ($messages as $message) {
                    Yii::$app->session->addFlash('error', "$field: $message");
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return 'success';
        }
        
        if ($model->hasErrors()) {
            foreach ($model->errors as $field => $messages) {
                foreach ($messages as $message) {
                    Yii::$app->session->addFlash('error', "$field: $message");
                }
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        
        if (Yii::$app->request->method == 'GET') {
            return $this->render('delete', [
                'model' => $model,
            ]);
        } else {
            $model->delete();
            return 'success';
        }
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        }

        Yii::$app->session->addFlash('error', 'Post not found');
        return null;
    }
}
