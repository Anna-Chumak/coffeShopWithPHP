<?php

namespace app\modules\admin\models;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\Expression;


use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $customerFirst
 * @property string $customerLast
 * @property string $customer_phone
 * @property int $location_id
 * @property int $is_drive_through
 * @property float $total
 * @property string|null $comment
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Locations $location
 * @property OrderItems[] $orderItems
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['customerFirst', 'customerLast', 'customer_phone', 'location_id', 'is_drive_through', 'total'], 'required'],
            [['location_id', 'is_drive_through', 'status'], 'integer'],
            [['total'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['customerFirst', 'customerLast'], 'string', 'max' => 50],
            [['customer_phone'], 'string', 'max' => 25],
            [['comment'], 'string', 'max' => 300],
            [['location_id'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'customerFirst' => 'Customer First',
            'customerLast' => 'Customer Last',
            'customer_phone' => 'Customer Phone',
            'location_id' => 'Location ID',
            'is_drive_through' => 'Is Drive Through',
            'total' => 'Total',
            'comment' => 'Comment',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Location]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'location_id']);
    }

    /**
     * Gets query for [[OrderItems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::className(), ['order_id' => 'id']);
    }

    public function behaviors() {
        return [
        [
        'class' => TimestampBehavior::class,
        'attributes' => [

       ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
        ],
        // если вместо метки времени UNIX используется DATETIME
        'value' => new Expression('NOW()'),
        ],
        ];
    }

    public function beforeDelete() {
        parent::beforeDelete();
        OrderItem::deleteAll(['order_id' => $this->id]);
        return true;

    }
       
       
}
