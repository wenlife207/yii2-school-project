<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "notice".
 *
 * @property string $id
 * @property string $title
 * @property string $publisher
 * @property string $importance
 * @property string $begindate
 * @property string $enddate
 * @property string $content
 * @property string $publishdate
 * @property string $category
 */
class Notice extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
 
    public static function tableName()
    {
        return 'notice';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'publisher', 'importance', 'begindate', 'enddate', 'content', 'publishdate', 'category'], 'required'],
            [['content'], 'string'],
            [['title'], 'string', 'max' => 100],
            [['publisher', 'category'], 'string', 'max' => 50],
            [['importance', 'begindate', 'enddate', 'publishdate'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */

    public function initCreate()
    {

        $this->publisher = Yii::$app->user->identity->username;
        $this->publishdate = date('Y-m-d H:m:s');

    }

    public function attributeLabels()
    {
        return [
            'id' => '编号',
            'title' => '标题',
            'publisher' => '发布人',
            'importance' => '重要级别',
            'begindate' => '开始日期',
            'enddate' => '结束日期',
            'content' => '内容',
            'publishdate' => '发布日期',
            'category' => '类别',
        ];
    }
}
