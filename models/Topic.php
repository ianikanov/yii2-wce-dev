<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "topic".
 *
 * @property int $id
 * @property string $name
 * 
 * @property int $last_post_id
 *
 * @property Post[] $posts
 */
class Topic extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'topic';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
        ];
    }
    
    public function getLast_post_id()
    {
        $post = $this->getPosts()->one();
        if ($post) return $post->id;
        else return null;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosts()
    {
        return $this->hasMany(Post::className(), ['topic_id' => 'id']);
    }
}
