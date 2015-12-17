<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reqitemlist".
 *
 * @property integer $id
 * @property string $name
 * @property integer $amount
 * @property integer $price
 */
class ReqItem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reqitem';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'amount'], 'required'],
            [['amount', 'price'], 'integer'],
            [['name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'amount' => 'Amount',
            'price' => 'Price',
        ];
    }
}
