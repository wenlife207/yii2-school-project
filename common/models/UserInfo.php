<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_info".
 *
 * @property string $id
 * @property string $username
 * @property string $name
 * @property string $phone
 * @property string $idcard
 * @property string $level
 * @property string $graduation
 * @property string $degree
 * @property string $intro
 * @property integer $status
 *
 * @property User $username0
 */
class UserInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username','name','idcard'], 'required'],
            [['intro'], 'string'],
            [['status'], 'integer'],
            [['username'], 'string', 'max' => 255],
            [['name', 'phone', 'level', 'graduation', 'degree'], 'string', 'max' => 20],
            [['idcard'], 'string', 'max' => 18],
            [['username'], 'unique'],
            [['idcard'], 'unique']
        ];
    }

    /**
    *initCreate 调用该函数，生成一般情况下的各种参数值
    */
    public function initCreate()
    {
        $this->username = YII::$app->user->identity->username;
        $this->status = 0;
    }

    public function getName($username)
    {
        $userInfo = static::find()->where(['username'=>$username])->one();
        return $userInfo->name;
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'name' => 'Name',
            'phone' => 'Phone',
            'idcard' => 'Idcard',
            'level' => 'Level',
            'graduation' => 'Graduation',
            'degree' => 'Degree',
            'intro' => 'Intro',
            'status' => 'Status',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsername0()
    {
        return $this->hasOne(User::className(), ['username' => 'username']);
    }
}
