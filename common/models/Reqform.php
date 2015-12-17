<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "reqform".
 *
 * @property integer $id
 * @property string $title
 * @property integer $type
 * @property string $content
 * @property string $user
 * @property string $userdepart
 * @property string $createtime
 * @property string $begindate
 * @property string $enddate
 * @property string $handledepart
 * @property string $state
 */
class Reqform extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'reqform';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'type', 'content', 'user', 'createtime'], 'required'],
            [['type'], 'string','max'=>40],
            [['content'], 'string'],
            [['title', 'userdepart', 'createtime', 'handledepart'], 'string', 'max' => 100],
            [['user', 'begindate', 'enddate'], 'string', 'max' => 50],
            [['state'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'type' => 'Type',
            'content' => 'Content',
            'user' => 'User',
            'userdepart' => 'Userdepart',
            'createtime' => 'Createtime',
            'begindate' => 'Begindate',
            'enddate' => 'Enddate',
            'handledepart' => 'Handledepart',
            'state' => 'State',
        ];
    }
}
