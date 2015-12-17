<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reqduty".
 *
 * @property string $id
 * @property string $username
 * @property string $duty
 * @property string $scope
 * @property string $param
 * @property string $addon
 */
class Reqduty extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reqduty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role', 'duty', 'scope', 'addon'], 'required'],
            [['role', 'duty', 'scope'], 'string', 'max' => 100],
            [['param', 'addon'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'role' => 'role',
            'duty' => 'Duty',
            'scope' => 'Scope',
            'param' => 'Param',
            'addon' => 'Addon',
        ];
    }
}
