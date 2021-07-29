<?php


namespace app\models;

use Yii;

class Mailer
{
	const TYPE_REGISTRATION = 1;
	const TYPE_PASSWORD_RESET = 2;


    private static $renderfile;
    private static $renderParams = [];
	private static $from = ['abrashema9@gmail.com' => 'Acme Mailer'];
	private static $to;
	private static $subject;

	public static function validate($type, $model) {
		switch ($type) {
			case self::TYPE_REGISTRATION:
				if (empty($model->id) || empty($model->uid) || empty($model->username) || empty($model->email)){
					return  false;
				}
				self::$to = [$model->email];
				self::$subject = 'Please activate your account';
				self::$renderfile = 'registration';
				self::$renderParams = ['user'=> $model];
				break;

			case TYPE_PASSWORD_RESET:
				break;

			default:
				return false;
		}
		return  true;
	}

	public static function send($type, $model){
		if (!self::validate($type, $model)){
			return false;
		}
		// Send Here Emails
		$message = \Yii::$app->mailer->compose(self::$renderfile,self::$renderParams);
		return $message->setFrom(self::$from)->setTo(self::$to)->setSubject(self::$subject)->send();
	}

}