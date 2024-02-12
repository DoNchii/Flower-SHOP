<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Users $model */

$this->title = 'Регистрация';
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>