<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Register';
?>
	<h1><?= Html::encode($this->title) ?></h1>

	<p>Please fill out the following fields to Register:</p>

	<?php $registerForm = ActiveForm::begin([
		'id' => 'register-form',
		'layout' => 'horizontal',
		'fieldConfig' => [
			'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
			'labelOptions' => ['class' => 'col-lg-1 control-label'],
		],
	]); ?>

	<?= $registerForm->field($newUser, 'username')->textInput(['autofocus' => true]) ?>
    <?= $registerForm->field($newUser, 'email')->textInput()?>

	<?= $registerForm->field($newUser, 'password')->passwordInput() ?>


	<div class="form-group">
		<div class="col-lg-offset-1 col-lg-11">
			<?= Html::submitButton('Register', ['class' => 'btn btn-primary', 'name' => 'register-button']) ?>
            <?= Html::resetButton('Reset', ['class' => 'btn btn-default', 'name' => 'reset-button']) ?>
		</div>
	</div>

	<?php ActiveForm::end(); ?>

	<div class="col-lg-offset-1" style="color:#999;">
	</div>

