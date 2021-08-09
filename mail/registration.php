<?php
use yii\helpers\Url;
use yii\helpers\Html;

$activationUrl = Url::to(['/site/activate', 'user' => $user->id, 'token'=> $user->uid], true);
echo "Please click the link to activate email", ['link' => Html::a('activate_link', $activationUrl)];