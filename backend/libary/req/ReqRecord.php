<?php
namespace backend\libary\req;
use Yii;
use common\models\Reqhandlerecord;
use common\models\UserInfo;

class ReqRecord
{
	protected $handleRecord;
	//protected $reqForm;

	public static function createRecord($model,$record)
	{
		$handleRecord = new Reqhandlerecord();
		$handleRecord->setAttributes($record);
		$handleRecord->reqform = $model->id;
        if ($name = UserInfo::getName(Yii::$app->user->identity->username)) {
        	$handleRecord->handler= $name;
        }else{
        	$handleRecord->handler= Yii::$app->user->identity->username;
        }
        
        $handleRecord->createtime = time();
       // $handleRecord->save();
       if ($handleRecord->save()) {
        	return true;
        }else{
        	var_export($handleRecord);
        	exit('save error');
        }
	}

	public static function getRecord($model)
	{
		$id = $model->id;
		$handleRecords = Reqhandlerecord::find()->where(['reqform'=>$id])->all();
		if ($handleRecords) {
			return $handleRecords;
		}else{
			return null;
		}
	}
}

?>