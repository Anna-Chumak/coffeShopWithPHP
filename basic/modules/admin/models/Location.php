<?php

namespace app\modules\admin\models;

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
 * @property string $class
 *
 * @property Orders[] $orders
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
            [['class'], 'string', 'max' => 20],
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
            'class' => 'Class',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['location_id' => 'id']);
    }
}
