<?php

namespace app\modules\admin\models;

use Yii;

/**
 * This is the model class for table "catergories".
 *
 * @property int $id
 * @property string $name
 *
 * @property Coffees[] $coffees
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catergories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 100],
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

    /**
     * Gets query for [[Coffees]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoffees()
    {
        return $this->hasMany(Coffees::className(), ['category' => 'id']);
    }
}
