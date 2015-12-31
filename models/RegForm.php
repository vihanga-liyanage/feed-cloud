<?php 

namespace app\models;

use yii\base\Model;

class RegForm extends Model{

	public $studentID;
	public $name;
	public $email;

	public function rules(){
		return [
				[['studentID', 'name', 'email'], 'required'],
				['email', 'email'],
				];
	}
}

?>