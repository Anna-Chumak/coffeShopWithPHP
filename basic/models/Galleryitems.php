<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "galleryitems".
 *
 * @property int $id
 * @property string $img
 * @property string $heading
 */
class Galleryitems extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'galleryitems';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['img', 'heading'], 'required'],
            [['img'], 'string', 'max' => 250],
            [['heading'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'img' => 'Img',
            'heading' => 'Heading',
        ];
    }
}
