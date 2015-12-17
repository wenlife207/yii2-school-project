<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reqhandlerecord".
 *
 * @property string $id
 * @property string $reqform
 * @property string $act
 * @property string $result
 * @property string $note
 * @property integer $handler
 * @property string $createtime
 *
 * @property Reqform $reqform0
 */
class Reqhandlerecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reqhandlerecord';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['reqform', 'act', 'handler', 'createtime'], 'required'],
            [['reqform'], 'integer'],
            [['note'], 'string'],
            [['act'], 'string', 'max' => 50],
            [['result'], 'string', 'max' => 20],
           // [['createtime'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'reqform' => 'Reqform',
            'act' => 'Act',
            'result' => 'Result',
            'note' => 'Note',
            'handler' => 'Handler',
            'createtime' => 'Createtime',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReqform0()
    {
        return $this->hasOne(Reqform::className(), ['id' => 'reqform']);
    }
}
