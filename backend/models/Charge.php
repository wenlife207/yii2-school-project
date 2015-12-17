<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "charge".
 *
 * @property integer $id
 * @property string $ip
 * @property string $mac
 * @property string $name
 * @property string $date
 * @property string $period
 * @property integer $state
 * @property string $note
 */
class Charge extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'charge';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip'], 'unique'],
            [['ip'], 'required'],
            [['ip', 'mac'], 'string', 'max' => 40],
            [['name', 'date', 'period','state'], 'string', 'max' => 20],
            [['note'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'ip' => 'IP地址',
            'mac' => 'Mac地址',
            'name' => '姓名',
            'date' => '缴费日期',
            'period' => '缴费时长',
            'state' => '状态',
            'note' => '备注',
        ];
    }
}
