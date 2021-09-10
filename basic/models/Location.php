<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "locations".
 *
 * @property int $id
 * @property string $address
 * @property string $address_line2
 * @property string $img
 * @property string $city
 * @property string $google_link
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'locations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address', 'address_line2', 'img', 'city', 'google_link', 'class'], 'required'],
            [['address', 'google_link'], 'string', 'max' => 500],
            [['address_line2'], 'string', 'max' => 200],
            [['img'], 'string', 'max' => 250],
            [['city'], 'string', 'max' => 50],
            [['class'], 'string', 'max'=>20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'address' => 'Address',
            'address_line2' => 'Address Line2',
            'img' => 'Img',
            'city' => 'City',
            'google_link' => 'Google Link',
            'class'=>"Class"
        ];
    }

    public function getLocation($id) {
        return self::find()->where(['id' => $id])->asArray()->one();
    }

    public function getLocationCity($class){
        return self::find()->where(['class' => $class])->asArray()->one();
    }

    public function read(){
        return self::find()->select('id, address, address_line2, city, class')->asArray()->all();
    }
}
