<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "coffees".
 *
 * @property int $id
 * @property string $name
 * @property int $isCoffee
 * @property int $isHot
 * @property int $category
 * @property int $serving_size
 * @property int $calories
 * @property int $totalFat
 * @property int $saturatedFat
 * @property int $transFat
 * @property int $cholesterol
 * @property int $sodium
 * @property int $totalCarbohydrates
 * @property int $dietaryFiber
 * @property int $sugars
 * @property int $protein
 * @property int $caffeine
 * @property string $indredients
 *
 * @property Catergories $category0
 */
class Coffee extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'coffees';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'isHot', 'serving_size', 'calories', 'totalFat', 'saturatedFat', 'transFat', 'cholesterol', 'sodium', 'totalCarbohydrates', 'dietaryFiber', 'sugars', 'protein', 'caffeine', 'indredients', 'price'], 'required'],
            [['price'], 'float'],
            [['isCoffee', 'isHot', 'category', 'serving_size', 'calories', 'totalFat', 'saturatedFat', 'transFat', 'cholesterol', 'sodium', 'totalCarbohydrates', 'dietaryFiber', 'sugars', 'protein', 'caffeine'], 'integer'],
            [['name'], 'string', 'max' => 150],
            [['indredients'], 'string', 'max' => 500],
            [['category'], 'exist', 'skipOnError' => true, 'targetClass' => Catergories::className(), 'targetAttribute' => ['category' => 'id']],
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
            'isCoffee' => 'Is Coffee',
            'isHot' => 'Is Hot',
            'category' => 'Category',
            'serving_size' => 'Serving Size',
            'calories' => 'Calories',
            'totalFat' => 'Total Fat',
            'saturatedFat' => 'Saturated Fat',
            'transFat' => 'Trans Fat',
            'cholesterol' => 'Cholesterol',
            'sodium' => 'Sodium',
            'totalCarbohydrates' => 'Total Carbohydrates',
            'dietaryFiber' => 'Dietary Fiber',
            'sugars' => 'Sugars',
            'protein' => 'Protein',
            'caffeine' => 'Caffeine',
            'indredients' => 'Indredients',
            'price'=>'Price',
        ];
    }

    /**
     * Gets query for [[Category0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory0()
    {
        return $this->hasOne(Catergories::className(), ['id' => 'category']);
    }

}
