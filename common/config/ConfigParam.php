<?php
/**
 * 
 * @authors 马文林 (mawl146@qq.com)
 * @date    2015-07-05 16:47:22
 * @version $Id$
 */
namespace common\config;
use Yii;
use common\models\UserInfo;
class ConfigParam
{
	
	function __construct(){
		
	}
	
	/**
	*获取配置参数
	*@param $configname 配置数据类型
	*@param $configdetail 配置文件具体的配置选项，如title\color等
	*@param $configindex 配置文件数组的KEY
	*@return  mixed string array  "not_set"
	* 如果输入参数，则返回代表重要性的字符串
	* 如果输入参数未找到，则返回not_set
	* 如果没有参数，则返回重要性数组
	*'importance'=>[   ( =>>>configname)
    *	(configindex=>>)'5'=>[ (configdetail=>>)'title'=>'紧急','csscolor'=>'text-error'],
    *	'6'=>['title'=>'重要','csscolor'=>'text-warning'],
    *	'7'=>['title'=>'提醒','csscolor'=>'text-info'],
    *	'8'=>['title'=>'普通','csscolor'=>'text-sucess']
    *	],
	*/
	public static function getConfig($configname,$configdetail=null,$configindex=null)
	{
		
		 if ($configarray = Yii::$app->params[$configname])
		 {
			$configreturn = array();
	
			if ($configdetail!=null) 
			{
			
				foreach ($configarray as $key => $value) 
				{

					if(array_key_exists($configdetail, $value))
					{

						$configreturn[$key] = $value[$configdetail];

					}else{

						$configreturn = 'configdetail does not exist!';
						//错误处理2

					}
				}
			}else{

					$configreturn = $configarray;
			}

			if ($configindex!=null&&is_array($configreturn)) 
			{
				$configreturn = array_key_exists($configindex, $configreturn)?$configreturn[$configindex]:"index_not_set";
				//错误处理3
			}

			return $configreturn;

		}else{
			
			exit('Config not set!');
			//错误处理1
		}
	}



 	static function getUserInfoList()
 	{
 		$data = UserInfo::find()->all();
 		$userInfoList = array();
 		foreach ($data as $key => $value) {
 			$userInfoList[$value['username']] = $value['name'];
 		}
 		return $userInfoList;
 	}

}