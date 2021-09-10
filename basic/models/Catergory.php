<?php

namespace app\models;


use Yii;

/**
 * This is the model class for table "catergories".
 *
 * @property int $id
 * @property string $name
 *
 * @property Coffee[] $coffee
 */
class Catergory extends \yii\db\ActiveRecord
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
     * Gets query for [[Coffee]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCoffees()
    {
        return $this->hasMany(Coffee::className(), ['category' => 'id']);
    }

}
