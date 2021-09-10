<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "history".
 *
 * @property int $id
 * @property int $year
 * @property string $title
 * @property string $img
 * @property string $description
 */
class History extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['year', 'title', 'img', 'description'], 'required'],
            [['year'], 'integer'],
            [['title'], 'string', 'max' => 150],
            [['img'], 'string', 'max' => 250],
            [['description'], 'string', 'max' => 1000],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'year' => 'Year',
            'title' => 'Title',
            'img' => 'Img',
            'description' => 'Description',
        ];
    }
}
