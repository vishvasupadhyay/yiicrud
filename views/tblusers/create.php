<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tblusers */

$this->title = 'Create Tblusers';
$this->params['breadcrumbs'][] = ['label' => 'Tblusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tblusers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>