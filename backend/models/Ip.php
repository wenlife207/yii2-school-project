<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "ip".
 *
 * @property integer $id
 * @property string $ip
 * @property string $mac
 * @property string $name
 * @property string $type
 * @property string $device
 * @property string $note
 */
class Ip extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ip';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ip'], 'unique'],
            [['ip', 'name'], 'required'],
            [['ip', 'type', 'device'], 'string', 'max' => 20],
            [['mac', 'name'], 'string', 'max' => 40],
            ['ip','match','pattern'=>'/^((?:(?:25[0-5]|2[0-4]\d|((1\d{2})|([1-9]?\d)))\.){3}(?:25[0-5]|2[0-4]\d|((1\d{2})|([1-9]?\d))))$/i','message'=>'IP地址格式不正确！'],
            ['mac','match','pattern'=>'/^(?:[0-9A-F]{4}-){2}(?:[0-9A-F]{4})*$/i','message'=>'MAC地址格式不正确！'],
            [['note'], 'string', 'max' => 100]
        ];
    }  

    public function getCharge()
    {
        return $this->hasOne(Charge::className(),['ip'=>'ip']);
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ip' => 'IP地址',
            'mac' => 'MAC地址',
            'name' => '登记人',
            'type' => '用户类型',
            'device' => '设备类型',
            'note' => '备注信息',
        ];
    }
}
