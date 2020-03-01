<?php

use yii\widgets\ActiveForm;

?>

<?php
$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
$form->action = Yii::$app->urlManager->createUrl('/sentences/counfromfile');
?>

<?= $form->field($model, 'bar')->fileInput() ?>

<button>Submit</button>

<?php ActiveForm::end() ?>

